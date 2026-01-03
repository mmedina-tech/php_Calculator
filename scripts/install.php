#!/usr/bin/env php
<?php
# SYNOPSIS: CLI installer for Massive Calculator
#
# install.php
#

require_once(__DIR__.'/../DB/install_lib.php');

function usage(){
    $message = <<<TXT
Usage: php scripts/install.php [options]

Options:
  --config <path>        Read values from an ini-style file (recommended for CI)
  --config-out <path>    Write config to this path (default: DB/calculator.config.local.php)
  --non-interactive      Fail if required values are missing
  --force                Overwrite existing config/unlock files
  --web-token            Create install.unlock.php token for the web installer
  --help                 Show this help

Config file keys:
  DB_HOST, DB_NAME, DB_USER, DB_PASS, BASE_URL, CALC_ROOT
TXT;
    echo $message."\n";
}

function read_ini_config($path){
    if (!file_exists($path)){
        fwrite(STDERR, "Config file not found: ".$path."\n");
        exit(1);
    }
    $perms = fileperms($path) & 0x01FF;
    if (($perms & 0x0077) !== 0){
        fwrite(STDERR, "Config file permissions are too open (expected 0600): ".$path."\n");
        exit(1);
    }

    $data = parse_ini_file($path, false, INI_SCANNER_RAW);
    if ($data === false){
        fwrite(STDERR, "Failed to parse config file: ".$path."\n");
        exit(1);
    }

    $map = array(
        'DB_HOST' => 'db_host',
        'DB_NAME' => 'db_name',
        'DB_USER' => 'db_user',
        'DB_PASS' => 'db_pass',
        'BASE_URL' => 'base_url',
        'CALC_BASE_URL' => 'base_url',
        'CALC_ROOT' => 'root_path',
    );
    $config = array();
    foreach ($map as $key => $dest){
        if (array_key_exists($key, $data)){
            $config[$dest] = $data[$key];
        }
    }
    return $config;
}

function prompt($label, $default = null){
    $suffix = $default !== null && $default !== '' ? " [".$default."]" : "";
    echo $label.$suffix.": ";
    $line = fgets(STDIN);
    if ($line === false){
        return $default;
    }
    $value = trim($line);
    return $value === '' ? $default : $value;
}

function prompt_hidden($label){
    echo $label.": ";
    $value = '';
    $stty = null;
    if (function_exists('shell_exec')){
        $stty = shell_exec('stty -g 2>/dev/null');
        if ($stty !== null){
            shell_exec('stty -echo 2>/dev/null');
        }
    }
    $value = fgets(STDIN);
    if ($stty !== null){
        shell_exec('stty '.$stty.' 2>/dev/null');
        echo "\n";
    }
    return trim($value);
}

$options = getopt('', array(
    'config:',
    'config-out:',
    'non-interactive',
    'force',
    'web-token',
    'help',
));

if (isset($options['help'])){
    usage();
    exit(0);
}

$root = realpath(__DIR__.'/..');
$default_base = '/'.basename($root);
$defaults = array(
    'db_host' => 'localhost',
    'db_name' => 'Massive_Calculator',
    'db_user' => '',
    'db_pass' => '',
    'base_url' => $default_base,
    'root_path' => $root,
);

if (isset($options['config'])){
    $defaults = array_merge($defaults, read_ini_config($options['config']));
}

$non_interactive = isset($options['non-interactive']);
if (!$non_interactive){
    $defaults['db_host'] = prompt("DB host", $defaults['db_host']);
    $defaults['db_name'] = prompt("DB name", $defaults['db_name']);
    $defaults['db_user'] = prompt("DB user", $defaults['db_user']);
    $defaults['db_pass'] = $defaults['db_pass'] !== '' ? $defaults['db_pass'] : prompt_hidden("DB password");
    $defaults['base_url'] = prompt("Base URL (e.g. /php_Calculator)", $defaults['base_url']);
}else{
    $required = array('db_host', 'db_name', 'db_user', 'db_pass');
    foreach ($required as $key){
        if (!isset($defaults[$key]) || $defaults[$key] === ''){
            fwrite(STDERR, "Missing required config value: ".$key."\n");
            exit(1);
        }
    }
}

$defaults['base_url'] = calc_normalize_base_url($defaults['base_url']);

$config_out = $options['config-out'] ?? ($root.'/DB/calculator.config.local.php');
$force = isset($options['force']);

list($messages, $warnings, $errors) = calc_install_db($defaults, array(
    'create_database' => true,
    'create_tables' => true,
    'create_logs' => true,
));

foreach ($messages as $msg){
    echo "[OK] ".$msg."\n";
}
foreach ($warnings as $msg){
    fwrite(STDERR, "[WARN] ".$msg."\n");
}
foreach ($errors as $msg){
    fwrite(STDERR, "[ERROR] ".$msg."\n");
}

list($ok, $msg) = calc_write_config_file($config_out, $defaults, array('force' => $force));
if ($ok){
    echo "[OK] ".$msg."\n";
}else{
    fwrite(STDERR, "[ERROR] ".$msg."\n");
}

if (isset($options['web-token'])){
    $token = calc_generate_install_token();
    list($tok_ok, $tok_msg) = calc_write_unlock_token($defaults['root_path'], $token, $force);
    if ($tok_ok){
        echo "[OK] ".$tok_msg."\n";
        echo "Installer token: ".$token."\n";
    }else{
        fwrite(STDERR, "[ERROR] ".$tok_msg."\n");
    }
}

if (!empty($errors) || !$ok){
    exit(1);
}
exit(0);

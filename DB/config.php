<?php
# SYNOPSIS: Load calculator configuration with safe defaults
#
# config.php
#
# Author: Marcus Medina, Codex
# Last Update: 2025-01-21
#

function calc_normalize_base_url($base_url){
    $base_url = trim((string)$base_url);
    if ($base_url === '' || $base_url === '/'){
        return '';
    }
    if ($base_url[0] !== '/'){
        $base_url = '/'.$base_url;
    }
    return rtrim($base_url, '/');
}

function calc_detect_base_url($root_path){
    if (PHP_SAPI === 'cli'){
        return '';
    }
    $doc_root = rtrim((string)($_SERVER['DOCUMENT_ROOT'] ?? ''), '/');
    $root_path = $root_path ? rtrim($root_path, '/') : '';
    if ($doc_root !== '' && $root_path !== '' && strpos($root_path, $doc_root) === 0){
        $relative = substr($root_path, strlen($doc_root));
        return $relative === '' ? '' : $relative;
    }

    $script_name = (string)($_SERVER['SCRIPT_NAME'] ?? '');
    $base = rtrim(dirname($script_name), '/');
    $base = preg_replace('#/(admin|DB|comments|about|f_suggestions)$#', '', $base);
    return $base === '/' ? '' : $base;
}

function calc_load_config($override_path = null){
    $config_file = null;
    $paths = array();
    if ($override_path){
        $paths[] = $override_path;
    }
    $env_path = getenv('CALC_CONFIG_PATH');
    if ($env_path){
        $paths[] = $env_path;
    }
    $paths[] = __DIR__.'/calculator.config.local.php';
    $paths[] = __DIR__.'/calculator.config.php';

    foreach ($paths as $path){
        if ($path && file_exists($path)){
            $config_file = $path;
            break;
        }
    }

    if ($config_file){
        include $config_file;
    }

    $root_path = $CALC_ROOT ?? realpath(__DIR__.'/..');
    $base_url = $CALC_BASE_URL ?? ($CALCPATH ?? '');
    if ($base_url === ''){
        $base_url = calc_detect_base_url($root_path);
    }

    return array(
        'db_host' => $CONNECTION ?? 'localhost',
        'db_name' => $DBNAME ?? 'Massive_Calculator',
        'db_user' => $USER ?? '',
        'db_pass' => $PASSWD ?? '',
        'root_path' => $root_path,
        'base_url' => calc_normalize_base_url($base_url),
        'config_file' => $config_file,
    );
}

function calc_require_config($override_path = null){
    $config = calc_load_config($override_path);
    $GLOBALS['CONNECTION'] = $config['db_host'];
    $GLOBALS['DBNAME'] = $config['db_name'];
    $GLOBALS['USER'] = $config['db_user'];
    $GLOBALS['PASSWD'] = $config['db_pass'];
    $GLOBALS['CALC_ROOT'] = $config['root_path'];
    $GLOBALS['CALC_BASE_URL'] = $config['base_url'];
    $GLOBALS['CALCPATH'] = $config['base_url'];
    return $config;
}

function calc_require_db_config($override_path = null){
    $config = calc_require_config($override_path);
    $missing = array();
    if ($config['db_host'] === ''){
        $missing[] = 'DB_HOST';
    }
    if ($config['db_name'] === ''){
        $missing[] = 'DB_NAME';
    }
    if ($config['db_user'] === ''){
        $missing[] = 'DB_USER';
    }
    if ($missing){
        $list = implode(', ', $missing);
        throw new RuntimeException("Missing database configuration values: ".$list);
    }
    return $config;
}

function calc_base_url(){
    static $base = null;
    if ($base === null){
        $config = calc_require_config();
        $base = $config['base_url'];
    }
    return $base;
}

function calc_root_path(){
    static $root = null;
    if ($root === null){
        $config = calc_require_config();
        $root = $config['root_path'];
    }
    return $root;
}

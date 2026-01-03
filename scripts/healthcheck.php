#!/usr/bin/env php
<?php
# SYNOPSIS: Sanity checks for Massive Calculator install
#
# healthcheck.php
#

require_once(__DIR__.'/../DB/install_lib.php');

$errors = 0;

function report($label, $ok, $detail = ''){
    $status = $ok ? 'OK' : 'FAIL';
    $line = '['.$status.'] '.$label;
    if ($detail !== ''){
        $line .= ' - '.$detail;
    }
    echo $line."\n";
}

$config = calc_load_config();
$config_file = $config['config_file'] ?? null;
report('Config file', $config_file !== null, $config_file ?: 'not found');

if ($config_file && file_exists($config_file)){
    $perms = fileperms($config_file) & 0x01FF;
    $secure = ($perms & 0x0077) === 0;
    report('Config permissions', $secure, substr(sprintf('%o', $perms), -4));
    if (!$secure){
        $errors++;
    }
}

if ($config['root_path']){
    report('Root path', is_dir($config['root_path']), $config['root_path']);
} else {
    report('Root path', false, 'missing');
    $errors++;
}

$lock_path = calc_install_lock_path($config['root_path']);
report('Installer lock', file_exists($lock_path), $lock_path);
if (!file_exists($lock_path)){
    $errors++;
}

$unlock_path = calc_install_unlock_path($config['root_path']);
report('Installer unlock', !file_exists($unlock_path), $unlock_path);
if (file_exists($unlock_path)){
    $errors++;
}

try{
    $db_config = calc_require_db_config();
}catch (RuntimeException $e){
    report('Database config', false, $e->getMessage());
    $errors++;
    exit(1);
}

try{
    $db = calc_connect_pdo($db_config['db_host'], $db_config['db_user'], $db_config['db_pass'], $db_config['db_name']);
    report('Database connection', true, $db_config['db_name']);
}catch (PDOException $e){
    report('Database connection', false, $e->getMessage());
    $errors++;
    exit(1);
}

$tables = array('Formulas', 'Comments', 'Calculation_Log');
$stmt = $db->prepare('SELECT COUNT(*) as cnt FROM information_schema.tables WHERE table_schema = :schema AND table_name = :name');
foreach ($tables as $table){
    $stmt->execute(array('schema' => $db_config['db_name'], 'name' => $table));
    $row = $stmt->fetch();
    $exists = ($row && (int)$row['cnt'] > 0);
    report('Table '.$table, $exists);
    if (!$exists){
        $errors++;
    }
}

$log_dir = rtrim($config['root_path'], '/').'/Logs';
$log_file = $log_dir.'/Calculator.log';
report('Logs directory', is_dir($log_dir), $log_dir);
if (!is_dir($log_dir)){
    $errors++;
}
report('Log file', file_exists($log_file), $log_file);
if (!file_exists($log_file)){
    $errors++;
}

if ($errors > 0){
    echo "\nHealthcheck completed with errors: ".$errors."\n";
    exit(1);
}

echo "\nHealthcheck completed successfully.\n";
exit(0);

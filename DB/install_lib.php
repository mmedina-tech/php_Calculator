<?php
# SYNOPSIS: Shared installer helpers for CLI and web setup
#
# install_lib.php
#
# Author: Marcus Medina, Codex
# Last Update: 2025-01-21
#

require_once(__DIR__.'/config.php');

function calc_php_string($value){
    return str_replace("'", "\\'", (string)$value);
}

function calc_write_config_file($path, $config, $options = array()){
    $force = !empty($options['force']);
    if (file_exists($path) && !$force){
        return array(false, "Config file already exists: ".$path);
    }

    $content = "<?php\n";
    $content .= "\$CONNECTION = '".calc_php_string($config['db_host'])."';\n";
    $content .= "\$DBNAME = '".calc_php_string($config['db_name'])."';\n";
    $content .= "\$USER = '".calc_php_string($config['db_user'])."';\n";
    $content .= "\$PASSWD = '".calc_php_string($config['db_pass'])."';\n";
    $content .= "\$CALC_BASE_URL = '".calc_php_string($config['base_url'])."';\n";
    $content .= "\$CALC_ROOT = '".calc_php_string($config['root_path'])."';\n";
    $content .= "\$CALCPATH = \$CALC_BASE_URL;\n";

    $old_umask = umask(0177);
    $bytes = file_put_contents($path, $content);
    umask($old_umask);

    if ($bytes === false){
        return array(false, "Failed to write config file: ".$path);
    }
    @chmod($path, 0600);
    return array(true, "Wrote config file: ".$path);
}

function calc_connect_pdo($host, $user, $pass, $db_name = null){
    $dsn = 'mysql:host='.$host.';charset=utf8mb4';
    if ($db_name){
        $dsn .= ';dbname='.$db_name;
    }
    $options = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    );
    return new PDO($dsn, $user, $pass, $options);
}

function calc_install_db($config, $options = array()){
    $messages = array();
    $warnings = array();
    $errors = array();

    $create_database = array_key_exists('create_database', $options) ? (bool)$options['create_database'] : true;
    $create_tables = array_key_exists('create_tables', $options) ? (bool)$options['create_tables'] : true;
    $create_logs = array_key_exists('create_logs', $options) ? (bool)$options['create_logs'] : true;

    try{
        $pdo = calc_connect_pdo($config['db_host'], $config['db_user'], $config['db_pass']);
    }catch (PDOException $e){
        $errors[] = "Database connection failed: ".$e->getMessage();
        return array($messages, $warnings, $errors);
    }

    if ($create_database){
        try{
            $pdo->exec("CREATE DATABASE IF NOT EXISTS `".$config['db_name']."` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");
            $messages[] = "Database ready: ".$config['db_name'];
        }catch (PDOException $e){
            $warnings[] = "Could not create database (will try existing): ".$e->getMessage();
        }
    }

    try{
        $db = calc_connect_pdo($config['db_host'], $config['db_user'], $config['db_pass'], $config['db_name']);
    }catch (PDOException $e){
        $errors[] = "Database select failed: ".$e->getMessage();
        return array($messages, $warnings, $errors);
    }

    if ($create_tables){
        $schema = array(
            'Formulas' => "CREATE TABLE IF NOT EXISTS `Formulas`(
                `form_id` int(11) NOT NULL AUTO_INCREMENT,
                `user_fname` varchar(256) NOT NULL,
                `user_lname` varchar(256) NOT NULL,
                `form_cat` varchar(256) NOT NULL,
                `form_name` varchar(256) NOT NULL,
                `Formula` varchar(256) NOT NULL,
                `description` varchar(256) NOT NULL,
                `Book_Title` varchar(256) NULL,
                `Book_Author` varchar(256) NULL,
                `Book_Publisher` varchar(256) NULL,
                `Page_Number` varchar(256) NULL,
                `Date_Entered` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
                PRIMARY KEY (`form_id`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;",
            'Comments' => "CREATE TABLE IF NOT EXISTS `Comments`(
                `comment_id` int(11) NOT NULL AUTO_INCREMENT,
                `first_name` varchar(256) NOT NULL,
                `last_name` varchar(256) NOT NULL,
                `comment` varchar(256) NOT NULL,
                `date_entered` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
                PRIMARY KEY (`comment_id`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;",
            'Calculation_Log' => "CREATE TABLE IF NOT EXISTS `Calculation_Log`(
                `log_id` int(11) NOT NULL AUTO_INCREMENT,
                `local_time` varchar(256) NOT NULL,
                `server_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
                `ip_address` varchar(256) NOT NULL,
                `category` varchar(256) NOT NULL,
                `formula` varchar(256) NOT NULL,
                `inputs` varchar(256) NOT NULL,
                `answer` varchar(256) NOT NULL,
                PRIMARY KEY (`log_id`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;",
        );

        foreach ($schema as $name => $sql){
            try{
                $db->exec($sql);
                $messages[] = "Table ready: ".$name;
            }catch (PDOException $e){
                $errors[] = "Failed creating table ".$name.": ".$e->getMessage();
            }
        }
    }

    if ($create_logs){
        $root_path = $config['root_path'];
        if ($root_path){
            $log_dir = rtrim($root_path, '/').'/Logs';
            if (!file_exists($log_dir)){
                if (@mkdir($log_dir, 0750, true)){
                    $messages[] = "Created Logs directory: ".$log_dir;
                }else{
                    $warnings[] = "Could not create Logs directory: ".$log_dir;
                }
            }
            $log_file = $log_dir.'/Calculator.log';
            if (!file_exists($log_file)){
                if (@touch($log_file)){
                    @chmod($log_file, 0640);
                    $messages[] = "Created log file: ".$log_file;
                }else{
                    $warnings[] = "Could not create log file: ".$log_file;
                }
            }
        }
    }

    return array($messages, $warnings, $errors);
}

function calc_generate_install_token(){
    return bin2hex(random_bytes(16));
}

function calc_install_lock_path($root_path){
    return rtrim($root_path, '/').'/install.lock';
}

function calc_install_unlock_path($root_path){
    return rtrim($root_path, '/').'/install.unlock.php';
}

function calc_write_unlock_token($root_path, $token, $force = false){
    $path = calc_install_unlock_path($root_path);
    if (file_exists($path) && !$force){
        return array(false, "Unlock file already exists: ".$path);
    }
    $content = "<?php\n\$INSTALL_TOKEN = '".calc_php_string($token)."';\n";
    $old_umask = umask(0177);
    $bytes = file_put_contents($path, $content);
    umask($old_umask);
    if ($bytes === false){
        return array(false, "Failed to write unlock file: ".$path);
    }
    @chmod($path, 0600);
    return array(true, "Wrote unlock file: ".$path);
}

function calc_read_unlock_token($root_path){
    $path = calc_install_unlock_path($root_path);
    if (!file_exists($path)){
        return null;
    }
    $INSTALL_TOKEN = null;
    include $path;
    return $INSTALL_TOKEN;
}

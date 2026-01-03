<?php
# SYNOPSIS: Secure web installer for Massive Calculator
#
# index.php
#
# Author: Marcus Medina, Codex
# Last Update: 2025-01-21
#

require_once(__DIR__.'/../DB/install_lib.php');

session_start();

$root_path = realpath(__DIR__.'/..');
$config = calc_load_config();
$base_url = $config['base_url'];

$lock_path = calc_install_lock_path($root_path);
$unlock_token = calc_read_unlock_token($root_path);

$errors = array();
$warnings = array();
$messages = array();
$success = false;

if (empty($_SESSION['csrf_token'])){
    $_SESSION['csrf_token'] = bin2hex(random_bytes(16));
}
$csrf_token = $_SESSION['csrf_token'];

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    if (!hash_equals($csrf_token, $_POST['csrf'] ?? '')){
        $errors[] = "Invalid CSRF token.";
    }

    if (file_exists($lock_path)){
        $errors[] = "Installer is locked. Remove install.lock to re-run.";
    }

    $provided_token = trim($_POST['install_token'] ?? '');
    if ($unlock_token === null){
        $errors[] = "Installer unlock token is missing. Run the CLI installer with --web-token.";
    } elseif (!hash_equals($unlock_token, $provided_token)){
        $errors[] = "Invalid installer token.";
    }

    $db_host = trim($_POST['db_host'] ?? '');
    $db_name = trim($_POST['db_name'] ?? '');
    $db_user = trim($_POST['db_user'] ?? '');
    $db_pass = (string)($_POST['db_pass'] ?? '');
    $base_url_input = trim($_POST['base_url'] ?? '');

    if ($db_host === '' || $db_name === '' || $db_user === ''){
        $errors[] = "Database host, name, and user are required.";
    }

    if (empty($errors)){
        $install_config = array(
            'db_host' => $db_host,
            'db_name' => $db_name,
            'db_user' => $db_user,
            'db_pass' => $db_pass,
            'base_url' => calc_normalize_base_url($base_url_input),
            'root_path' => $root_path,
        );

        list($messages, $warnings, $install_errors) = calc_install_db($install_config, array(
            'create_database' => true,
            'create_tables' => true,
            'create_logs' => true,
        ));
        $errors = array_merge($errors, $install_errors);

        $overwrite = !empty($_POST['overwrite_config']);
        list($ok, $cfg_msg) = calc_write_config_file($root_path.'/DB/calculator.config.local.php', $install_config, array(
            'force' => $overwrite,
        ));
        if ($ok){
            $messages[] = $cfg_msg;
        }else{
            $errors[] = $cfg_msg;
        }

        if (empty($errors)){
            file_put_contents($lock_path, "locked\n");
            @chmod($lock_path, 0600);
            @unlink(calc_install_unlock_path($root_path));
            $success = true;
        }
    }
}

$admin_action = ($base_url !== '' ? $base_url : '')."/admin/index.php";
$base_url_value = $base_url !== '' ? $base_url : calc_normalize_base_url('/'.basename($root_path));
?>

<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Marcus Medina">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Installation form for DB">
        <link rel="stylesheet" href="<?php echo htmlspecialchars($base_url); ?>/css/calculator.css" type="text/css" media="" title="" charset="" />
        <link rel="stylesheet" href="<?php echo htmlspecialchars($base_url); ?>/css/install.css" type="text/css" media="" title="" charset="" />
        <link rel="stylesheet" href="<?php echo htmlspecialchars($base_url); ?>/css/DataGridView.css" type="text/css" media="" title="" charset="" />
        <link rel="stylesheet" href="<?php echo htmlspecialchars($base_url); ?>/css/header.css" type="text/css" media="" title="" charset="" />
        <title>Massive Calculator Installer</title>
    </head>
    <body>
        <div id="maindisplay">
            <div class="Head-Column">
                <h1 class="mainHeader"><img id="mainlogo" align="center" src="<?php echo htmlspecialchars($base_url); ?>/images/massive01.svg" alt="Massive Calculator"> The Massive Calculator!</h1>
            </div>
        </div>
        <div>
            <br>
            <?php if (file_exists($lock_path)) : ?>
                <div class="error">
                    Installer is locked. Remove <code>install.lock</code> to re-run.
                </div>
            <?php elseif ($unlock_token === null) : ?>
                <div class="error">
                    Installer unlock token not found. Run <code>php scripts/install.php --web-token</code> and refresh this page.
                </div>
            <?php endif; ?>

            <?php if (!empty($errors)) : ?>
                <div class="error">
                    <?php foreach ($errors as $error) : ?>
                        <pre><?php echo htmlspecialchars($error); ?></pre>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <?php if (!empty($warnings)) : ?>
                <div class="success">
                    <?php foreach ($warnings as $warning) : ?>
                        <pre><?php echo htmlspecialchars($warning); ?></pre>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <?php if (!empty($messages)) : ?>
                <div class="success">
                    <?php foreach ($messages as $message) : ?>
                        <pre><?php echo htmlspecialchars($message); ?></pre>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <?php if ($success) : ?>
                <div class="success">
                    <pre>Install complete. The installer is now locked.</pre>
                    <pre><a href="<?php echo htmlspecialchars($base_url); ?>/calculator_front.php">Start Calculator</a></pre>
                </div>
            <?php endif; ?>

            <?php if (!file_exists($lock_path) && $unlock_token !== null) : ?>
                <form action="<?php echo htmlspecialchars($admin_action); ?>" method="post">
                    <h2>Use a pre-created MariaDB user to set up the database and config.</h2>
                    <input type="hidden" name="csrf" value="<?php echo htmlspecialchars($csrf_token); ?>" />
                    <label>Installer Token:</label>
                    <input type="password" name="install_token" value="" />
                    <br>
                    <label>DB Host:</label>
                    <input type="text" name="db_host" value="<?php echo htmlspecialchars($config['db_host'] ?? 'localhost'); ?>" />
                    <br>
                    <label>Database Name:</label>
                    <input type="text" name="db_name" value="<?php echo htmlspecialchars($config['db_name'] ?? 'Massive_Calculator'); ?>" />
                    <br>
                    <label>Username:</label>
                    <input type="text" name="db_user" value="<?php echo htmlspecialchars($config['db_user'] ?? ''); ?>" />
                    <br>
                    <label>Password:</label>
                    <input type="password" name="db_pass" value="" />
                    <br>
                    <label>Base URL (web path):</label>
                    <input type="text" name="base_url" value="<?php echo htmlspecialchars($base_url_value); ?>" />
                    <br>
                    <label>
                        <input type="checkbox" name="overwrite_config" value="1" />
                        Overwrite existing config file
                    </label>
                    <br>
                    <input type="submit" value="Start Install →" />
                </form>
            <?php endif; ?>
        </div>
    </body>
</html>

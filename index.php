<?php
// file required for start application
$CONFIG_FILE_REQUIRED = 'config/config.inc.php';

// check file not exist
if (!file_exists($CONFIG_FILE_REQUIRED)) {
    header('location: _installer/setup-config.php');
}

// replace this for autoload of your application
echo 'installed';

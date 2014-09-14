<?php

define('CONFIG_FILE_REQUIRED', 'config/config.inc.php');

if (!file_exists(CONFIG_FILE_REQUIRED)) {
    header('location: _installer/setup-config.php');
}

echo 'installed';

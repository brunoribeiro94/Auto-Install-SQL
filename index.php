<?php

$file = 'config/config.inc.php';

if (!file_exists($file)) {
    header('location: _installer/setup-config.php');
}
// replace for your application
echo 'installed';

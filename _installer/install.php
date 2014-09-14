<?php
// include file config
require '../config/config.inc.php';

$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
// Check if any error occurred
if (!mysqli_connect_errno()) {
    $query = file_get_contents("Run.sql");
    /* execute multi query */
    if (mysqli_multi_query($mysqli, $query)) {
        header('location: ../index.php');
    } else {
        header('location: setup-config.php');
    }
} else {
    die('An error occurred while connecting to the database');
}

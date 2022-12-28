<?php

session_start();

$dbserver = "localhost";
$dbdatabase = "music_hub";
$dbuser = "root";
$dbpwd = "";

$conn = mysqli_connect($dbserver, $dbuser, $dbpwd,$dbdatabase);

if (!$conn) {
    echo "Database connectivity error";
}

?>
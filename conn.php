<?php
$server_name = "localhost";
$uname = "root";
$password = "";
$db_name = "ccs_masterlist";
$conn = false;
try {
    $conn = mysqli_connect($server_name, $uname, $password, $db_name);
}
catch (Exception $e) {
    $conn = mysqli_connect($server_name, $uname, $password, $db_name);
}

if (!$conn) {
    echo "Connection failed!";
}
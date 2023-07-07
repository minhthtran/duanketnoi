<?php

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "dbqltt";
$conn = mysqli_connect($hostname, $username, $password, $dbname);
if (!$conn) {
    echo '<script> alert("Không thể kết nối!"); </script>';
    exit();
}

mysqli_query($conn, "set names 'utf8' ");

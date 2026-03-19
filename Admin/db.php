<?php

$host = "localhost";
$user = "root";
$password = "";

// MySQL connect
// $conn = mysqli_connect($host, $user, $password);
$conn = mysqli_connect($host, $user, $password);
if (!$conn) {
    die("Connection Failed");
}

// Database create if not existsq
$sql = "CREATE DATABASE IF NOT EXISTS tnpc";
mysqli_query($conn, $sql);

// Select database
mysqli_select_db($conn, "tnpc");

// Create admin table if not exists
// $table = "CREATE TABLE IF NOT EXISTS admin (
//     id INT AUTO_INCREMENT PRIMARY KEY,
//     username VARCHAR(100) NOT NULL,
//     password VARCHAR(100) NOT NULL
// )";

// mysqli_query($conn, $table);

?>

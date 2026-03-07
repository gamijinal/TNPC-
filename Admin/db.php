<?php

$host="localhost";
$user="root";
$password="";

// MySQL connect
$conn=mysqli_connect($host,$user,$password);

if(!$conn){
die("Connection Failed");
}

// Database create if not exists
$sql="CREATE DATABASE IF NOT EXISTS tnpc";
mysqli_query($conn,$sql);

// Select database
mysqli_select_db($conn,"tnpc");

?>
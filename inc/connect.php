<?php

$serverName = "localhost";
$username = "root";
$password = "";
$dbName = "corephp";

$conn = mysqli_connect($serverName, $username, $password, $dbName);

if(!$conn){
    die("Connection failed" . mysqli_connect_error());
}



?>
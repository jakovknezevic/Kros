<?php
$user="id1456158_kros1";
$password="kros1";
$database="id1456158_kros1";
$hostname="localhost";

$conn = new mysqli($hostname, $user, $password);


mysqli_select_db($conn,$database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


error_reporting(0);
?>
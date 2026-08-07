<?php
/*
$host = "sql306.infinityfree.com";
$user = "if0_42566624";
$password = "Faiz2026";
$database = "if0_42566624_timeluxe";
*/

$host="localhost";
$user="root";
$password="";
$database="time_luxe";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
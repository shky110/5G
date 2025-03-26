<?php
$host = 'localhost';
$user = 'root'; // Change if using live server
$pass = '';
$db_name = 'investment_db';

$conn = mysqli_connect($host, $user, $pass, $db_name);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>

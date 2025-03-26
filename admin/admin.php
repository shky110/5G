<?php
session_start();
include("../config/db.php");

if ($_SESSION['user'] != 'admin') {
    die("Access denied");
}

$query = "SELECT * FROM deposits WHERE status='pending'";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
    echo "User: " . $row['user'] . " | Amount: " . $row['amount'] . " | <a href='approve.php?id=" . $row['id'] . "'>Approve</a><br>";
}
?>

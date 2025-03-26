<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: users/login.php");
    exit();
}
echo "<h1>Welcome, " . $_SESSION['user'] . "</h1>";
echo "<a href='payments/deposit.php'>Deposit Funds</a>";
?>

<?php
session_start();
include("../config/db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $amount = $_POST['amount'];
    $transaction_id = $_POST['transaction_id'];

    $query = "INSERT INTO deposits (user, amount, transaction_id, status) VALUES ('$_SESSION[user]', '$amount', '$transaction_id', 'pending')";
    if (mysqli_query($conn, $query)) {
        echo "Deposit request submitted. Wait for admin approval.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
<form method="post">
    <input type="number" name="amount" placeholder="Amount in USD" required>
    <input type="text" name="transaction_id" placeholder="Binance Transaction ID" required>
    <button type="submit">Submit</button>
</form>

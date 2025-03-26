<?php
session_start();
include("../config/db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $amount = $_POST['amount'];
    $transaction_id = $_POST['transaction_id'];
    $wallet_address = $_POST['wallet_address'];

    // Save deposit request with status "pending"
    $query = "INSERT INTO deposits (user, amount, transaction_id, wallet_address, status) 
              VALUES ('$_SESSION[user]', '$amount', '$transaction_id', '$wallet_address', 'pending')";
    
    if (mysqli_query($conn, $query)) {
        echo "Deposit request submitted. Wait for admin approval.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<h2>Deposit USDT (TRC20)</h2>
<form method="post">
    <label>Amount (USD):</label>
    <input type="number" name="amount" placeholder="Enter amount in USD" required>
    
    <label>Transaction ID (TXID):</label>
    <input type="text" name="transaction_id" placeholder="Paste Binance Transaction ID" required>
    
    <label>Wallet Address:</label>
    <input type="text" name="USDT TRC-20" value="YOUR_USDT_TRC20_ADDRESS" readonly>

    <button type="submit">Submit Deposit</button>
</form>


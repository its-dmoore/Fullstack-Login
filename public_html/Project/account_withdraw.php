<?php

// Start session and include database connection code
session_start();
include_once 'db_connect.php';

// Get user ID from session
$user_id = $_SESSION['user_id'];

// Fetch user's accounts (excluding world account)
$accounts_query = "SELECT id, account_number, account_type, balance FROM Accounts WHERE user_id = ? AND account_number != '000000000000'";
$stmt = $mysqli->prepare($accounts_query);
$stmt->bind_param('i', $user_id);
$stmt->execute();
$result = $stmt->get_result();

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form inputs
    $account_id = $_POST['account'];
    $amount = $_POST['amount'];
    $memo = $_POST['memo'];

    // Fetch selected account's current balance
    $balance_query = "SELECT balance FROM Accounts WHERE id = ?";
    $stmt = $mysqli->prepare($balance_query);
    $stmt->bind_param('i', $account_id);
    $stmt->execute();
    $balance_result = $stmt->get_result();
    $balance_row = $balance_result->fetch_assoc();
    $current_balance = $balance_row['balance'];

    // Check if withdrawal amount is greater than current balance
    if ($amount > $current_balance) {
        $error = "Withdrawal amount exceeds current balance.";
    } else {
        // Calculate new balances
        $new_src_balance = $current_balance - $amount;
        $new_dest_balance = $amount;

        // Insert transaction records
        $transaction_type = "withdrawal";
        $created = date('Y-m-d H:i:s');
        $modified = date('Y-m-d H:i:s');
        $src_account_id = $account_id;
        $dest_account_id = -1; // negative value to represent world account
        $src_expected_total = $new_src_balance;
        $dest_expected_total = $new_dest_balance;
        $src_balance_change = -$amount;
        $dest_balance_change = $amount;

        $insert_query = "INSERT INTO Transactions (transaction_type, memo, created, modified, account_src, account_dest, src_expected_total, dest_expected_total, src_balance_change, dest_balance_change) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $mysqli->prepare($insert_query);
        $stmt->bind_param('ssssiiddii', $transaction_type, $memo, $created, $modified, $src_account_id, $dest_account_id, $src_expected_total, $dest_expected_total, $src_balance_change, $dest_balance_change);
        $stmt->execute();

        // Update account balances
        $update_query = "UPDATE Accounts SET balance = ? WHERE id = ?";
        $stmt = $mysqli->prepare($update_query);
        $stmt->bind_param('di', $new_src_balance, $account_id);
        $stmt->execute();
        $stmt->bind_param('di', $new_dest_balance, $dest_account_id);
        $stmt->execute();

        // Redirect to account details page
        header("Location: account_details.php?account_id=$account_id");
        echo "Withdrawl successful";
        exit();
    }
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Withdraw</title>
</head>
<body>
	<h1>Withdraw</h1>
	<?php if (isset($error)) { ?>
		<div><?= $error ?></div>
	<?php } ?>
	<form method="post">
		<label for="account">Select account:</label>
		<select id="account" name="account">

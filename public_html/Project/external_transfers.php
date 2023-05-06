<?php
session_start();

// Connect to the database (replace dbname, username, and password with your own values)
$db = new PDO('mysql:host=localhost;dbname=mydatabase', 'username', 'password');

// Retrieve the user's accounts from the Accounts table
$stmt = $db->prepare('SELECT * FROM Accounts WHERE user_id = :user_id');
$stmt->execute(array(':user_id' => $_SESSION['user_id']));
$accounts = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve form data
  $account_src = $_POST['account_src'];
  $last_name = $_POST['last_name'];
  $account_dest_suffix = $_POST['account_dest_suffix'];
  $amount = $_POST['amount'];
  $memo = $_POST['memo'];
}
  // Retrieve the source account from the Accounts table
  $stmt = $db->prepare('SELECT * FROM Accounts WHERE id = :id AND user_id = :user_id');
  $stmt->execute(array(
    ':id' => $account_src,
    ':user_id' => $_SESSION['user_id']
  ));
  $account_src_row = $stmt->fetch(PDO::FETCH_ASSOC);

  // Check if the source account has sufficient balance
  if ($account_src_row['balance'] < $amount) {
    $error_message = 'Insufficient balance';
  } else {
    // Retrieve the destination account from the Accounts table
    $stmt = $db->prepare('SELECT * FROM Accounts WHERE last_name = :last_name AND account_number LIKE CONCAT("%", :account_dest_suffix)');
    $stmt->execute(array(
      ':last_name' => $last_name,
      ':account_dest_suffix' => $account_dest_suffix
    ));
  }
    $account_dest_row = $stmt->fetch(PDO::FETCH_ASSOC);

    // Check if the destination account exists
    if (!$account_dest_row) {
      $error_message = 'Destination account not found';
    } else {
      // Calculate new balances for the source and destination accounts
      $new_balance_src = $account_src_row['balance'] - $amount;
      $new_balance_dest = $account_dest_row['balance'] + $amount;
    }
      // Update the Accounts table with the new balances
      $stmt = $db->prepare('UPDATE Accounts SET balance = :balance WHERE id = :id');
      $stmt->execute(array(
        ':balance' => $new_balance_src,
        ':id' => $account_src
      ));
      $stmt = $db->prepare('UPDATE Accounts SET balance = :balance WHERE id = :id');
      $stmt->execute(array(
        ':balance' => $new_balance_dest,
        ':id' => $account_dest_row['id']
      ));

      // Insert a new transaction pair into the Transaction table
      $stmt = $db->prepare('INSERT INTO Transactions (account_id, type, amount, memo) VALUES (:account_id, :type, :amount, :memo)');
      $stmt->execute(array(
        ':account_id' => $account_src,
        ':type' => 'ext-transfer',
        ':amount' => -$amount,
        ':memo' => $memo
      ));
      $stmt = $db->prepare('INSERT INTO Transactions (account_id, type, amount, memo) VALUES (:account_id, :type, :amount, :memo)');
      $stmt->execute(array(
        ':account_id' => $account_dest_row['id'],
        ':type' => 'ext-transfer',
        ':amount' => $amount,
        ':memo' => $memo
      ));
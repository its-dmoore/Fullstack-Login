<?php
session_start();
include('db_connection.php'); // include your database connection file

// check if user is logged in
if (!isset($_SESSION['user_id'])) {
  header('Location: login.php');
  exit;
}

$user_id = $_SESSION['user_id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $balance = $_POST['balance'];

  if ($balance < 5) {
    $error_message = 'Minimum deposit is $5';
  } else {
    // insert null record to generate new id
    $stmt = $conn->prepare('INSERT INTO Accounts (id) VALUES (null)');
    $stmt->execute();

    // get the new account id
    $account_id = $conn->lastInsertId();

    // generate account number based on account id
    $account_number = str_pad($account_id, 12, '0', STR_PAD_LEFT);

    // set account type and user_id
    $stmt = $conn->prepare('UPDATE Accounts SET account_number = ?, user_id = ?, balance = ?, account_type = "checking" WHERE id = ?');
    $stmt->execute([$account_number, $user_id, $balance, $account_id]);

    // record the transaction pair
    $world_account_id = -1; // assuming world account id is -1
    $transaction_type = 'deposit';
    $created = date('Y-m-d H:i:s');
    $stmt = $conn->prepare('INSERT INTO Transactions (account_src, account_dest, balance_change, transaction_type, memo, expected_total, created) VALUES (?, ?, ?, ?, ?, ?, ?), (?, ?, ?, ?, ?, ?, ?)');
    $stmt->execute([$world_account_id, $account_id, -$balance, $transaction_type, 'initial deposit', $balance, $created, $account_id, $world_account_id, $balance, $transaction_type, 'initial deposit', $balance, $created]);

    // redirect to Accounts page
    header('Location: accounts.php');
    exit;
  }
}

?>

<!-- HTML code for account creation form -->
<h1>Create Checking Account</h1>
<?php if (isset($error_message)) { ?>
  <div class="error"><?php echo $error_message; ?></div>
<?php } ?>
<form method="POST">
  <label>Initial Deposit ($5 minimum)</label>
  <input type="number" name="balance" required min="5">
  <button type="submit">Create Account</button>
</form>

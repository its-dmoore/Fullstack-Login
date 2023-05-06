<?php
// Connect to database
$db = new mysqli('localhost', 'username', 'password', 'database_name');

// Check connection
if ($db->connect_errno) {
    echo "Failed to connect to MySQL: " . $db->connect_error;
    exit();
}

// Get user's accounts
$user_id = 123; // replace with actual user ID
$query = "SELECT * FROM Accounts WHERE user_id=$user_id AND account_type!='world'";
$result = $db->query($query);

// Check if user has accounts
if ($result->num_rows == 0) {
    echo "You don't have any accounts.";
    exit();
}

// Transfer form submission handling
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $account_src = $_POST['account_src'];
    $account_dest = $_POST['account_dest'];
    $amount = $_POST['amount'];
    $memo = $_POST['memo'];

    // Get account details
    $query = "SELECT * FROM Accounts WHERE account_id=$account_src OR account_id=$account_dest";
    $result = $db->query($query);
    $accounts = array();
    while ($row = $result->fetch_assoc()) {
        $accounts[$row['account_id']] = $row;
    }

    // Check if account_src has enough balance
    if ($accounts[$account_src]['balance'] < $amount) {
        echo "Insufficient balance in account $account_src.";
        exit();
    }

    // Calculate new balances
    $balance_src = $accounts[$account_src]['balance'] - $amount;
    $balance_dest = $accounts[$account_dest]['balance'] + $amount;

    // Start transaction
    $db->begin_transaction();

    // Insert transaction records
    $query1 = "INSERT INTO Transactions (account_id, transaction_type, balance_change, expected_total, memo)
               VALUES ($account_src, 'debit', -$amount, $balance_src, '$memo')";
    $query2 = "INSERT INTO Transactions (account_id, transaction_type, balance_change, expected_total, memo)
               VALUES ($account_dest, 'credit', $amount, $balance_dest, '$memo')";
    $result1 = $db->query($query1);
    $result2 = $db->query($query2);

    // Update account balances
    $query3 = "UPDATE Accounts SET balance=$balance_src WHERE account_id=$account_src";
    $query4 = "UPDATE Accounts SET balance=$balance_dest WHERE account_id=$account_dest";
    $result3 = $db->query($query3);
    $result4 = $db->query($query4);

    // Check if all queries succeeded
    if ($result1 && $result2 && $result3 && $result4) {
        $db->commit();
        echo "Transfer successful!";
    } else {
        $db->rollback();
        echo "Transfer failed. Please try again later.";
    }

    // Close database connection
    $db->close();
    exit();
}
?>

<!-- HTML form -->
<h1>Internal Transfer</h1>
<form method="post">
    <label for="account_src">From account:</label>
    <select name="account_src" required>
        <?php while ($row = $result->fetch_assoc()) : ?>
            <option value="<?php echo $row['account_id']; ?>"><?php echo $row['account_number'] . ' ($' . $row['balance'] . ')'; ?></option>
        <?php endwhile; ?>
    </select>
    <br>
    <label for="account_dest">To account:</label

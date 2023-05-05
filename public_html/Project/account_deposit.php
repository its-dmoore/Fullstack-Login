<?php
// Fetch the list of accounts for the user
$accounts = $db->query("SELECT * FROM Accounts WHERE user_id = $user_id AND account_type != 'world' LIMIT 5");

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $account_id = $_POST['account'];
    $amount = floatval($_POST['amount']);
    $memo = $_POST['memo'];

    // Fetch the account and check if it exists and belongs to the user
    $account = $db->query("SELECT * FROM Accounts WHERE id = $account_id AND user_id = $user_id AND account_type != 'world'")->fetch();
    if (!$account) {
        echo "Invalid account selected";
        exit;
    }

    // Check if the amount is valid
    if ($amount <= 0) {
        echo "Invalid amount";
        exit;
    }

    // Calculate the expected totals for the accounts
    $balance_a = $account['balance'];
    $balance_b = $db->query("SELECT balance FROM Accounts WHERE account_type = 'world'")->fetch()['balance'];
    $balance_a -= $amount;
    $balance_b += $amount;

    // Insert the transaction records
    $db->beginTransaction();
    $stmt = $db->prepare("INSERT INTO Transactions (account_src, account_dest, balance_change, expected_total, memo) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$account_id, 'world', -$amount, $balance_a, $memo]);
    $stmt->execute(['world', $account_id, $amount, $balance_b, $memo]);

    // Update the account balances
    $db->query("UPDATE Accounts SET balance = $balance_a WHERE id = $account_id");
    $db->query("UPDATE Accounts SET balance = $balance_b WHERE account_type = 'world'");

    $db->commit();
    echo "Deposit successful";
}

?>

<h2>Deposit</h2>
<form method="POST">
    <label>Account:</label>
    <select name="account">
        <?php foreach ($accounts as $account): ?>
            <option value="<?= $account['id'] ?>"><?= $account['account_number'] ?> - <?= $account['account_type'] ?> - <?= $account['balance'] ?></option>
        <?php endforeach; ?>
    </select>
    <br>
    <label>Amount:</label>
    <input type="number" name="amount" min="0" step="0.01" required>
    <br>
    <label>Memo:</label>
    <input type="text" name="memo">
    <br>
    <button type="submit">Deposit</button>
</form>

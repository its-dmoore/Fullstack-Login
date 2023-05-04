<?php
// Get the selected account number from the URL parameter
$accountNumber = $_GET['account_number'];

// Retrieve the account information from the Accounts table
$query = "SELECT account_number, account_type, balance, created FROM Accounts WHERE account_number = '$accountNumber'";
$result = mysqli_query($conn, $query);
$account = mysqli_fetch_assoc($result);

// Retrieve the transaction history from the Transactions table
$query = "SELECT t.transaction_type, t.balance_change, t.created, t.memo, t.expected_total, a1.account_number AS src_account_number, a2.account_number AS dest_account_number
          FROM Transactions t
          JOIN Accounts a1 ON t.account_src = a1.id
          JOIN Accounts a2 ON t.account_dest = a2.id
          WHERE a1.account_number = '$accountNumber' OR a2.account_number = '$accountNumber'
          ORDER BY t.created DESC
          LIMIT 10";
$result = mysqli_query($conn, $query);

// Display the account information and transaction history
?>
<h1>Account Details</h1>
<p>Account Number: <?php echo $account['account_number']; ?></p>
<p>Account Type: <?php echo $account['account_type']; ?></p>
<p>Balance: <?php echo $account['balance']; ?></p>
<p>Opened/Created Date: <?php echo $account['created']; ?></p>

<h1>Transaction History</h1>
<table>
  <thead>
    <tr>
      <th>Src Account Number</th>
      <th>Dest Account Number</th>
      <th>Transaction Type</th>
      <th>Balance Change</th>
      <th>Date</th>
      <th>Expected Total</th>
      <th>Memo</th>
    </tr>
  </thead>
  <tbody>
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
      <tr>
        <td><?php echo $row['src_account_number']; ?></td>
        <td><?php echo $row['dest_account_number']; ?></td>
        <td><?php echo $row['transaction_type']; ?></td>
        <td><?php echo $row['balance_change']; ?></td>
        <td><?php echo $row['created']; ?></td>
        <td><?php echo $row['expected_total']; ?></td>
        <td><?php echo $row['memo']; ?></td>
      </tr>
    <?php } ?>
  </tbody>
</table>

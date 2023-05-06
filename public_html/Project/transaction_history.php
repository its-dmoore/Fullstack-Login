<?php
// Connect to database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

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

// Set default values
$fromDate = '';
$toDate = '';
$transactionType = '';
$pageSize = 10;
$pageNumber = 1;

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get form data
  $fromDate = $_POST["from_date"];
  $toDate = $_POST["to_date"];
  $transactionType = $_POST["transaction_type"];
  $pageNumber = $_POST["page_number"];

  // Prepare query
  $offset = ($pageNumber - 1) * $pageSize;
  $query = "SELECT * FROM Transactions WHERE 1=1";
  if (!empty($fromDate)) {
    $query .= " AND created >= '$fromDate'";
  }
  if (!empty($toDate)) {
    $query .= " AND created <= '$toDate'";
  }
  if (!empty($transactionType)) {
    $query .= " AND transaction_type = '$transactionType'";
  }
  $query .= " ORDER BY created DESC LIMIT $offset, $pageSize";

  // Execute query
  $result = $conn->query($query);
}

// Close connection
$conn->close();
?>
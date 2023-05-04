<?php

// First, connect to the database
$conn = new mysqli("localhost", "username", "password", "database_name");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve user's accounts from the database
$user_id = 123; // Replace with the actual user ID
$sql = "SELECT account_number, account_type, modified, balance FROM Accounts WHERE user_id = $user_id LIMIT 5";
$result = $conn->query($sql);

// Display the account information in a table
if ($result->num_rows > 0) {
    echo "<table><tr><th>Account Number</th><th>Account Type</th><th>Modified</th><th>Balance</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["account_number"]."</td><td>".$row["account_type"]."</td><td>".$row["modified"]."</td><td>".$row["balance"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "No accounts found.";
}

// Close the database connection
$conn->close();

?>

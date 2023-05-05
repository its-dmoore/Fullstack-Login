CREATE TABLE transactions (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    account_src INT NOT NULL,
    account_dest INT NOT NULL,
    balance_change DECIMAL(10, 2) NOT NULL,
    transaction_type VARCHAR(50) NOT NULL,
    memo VARCHAR(255),
    expected_total DECIMAL(10, 2) NOT NULL,
    created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    modified TIMESTAMP DEFAULT '0000-00-00 00:00:00',
    FOREIGN KEY (account_src) REFERENCES accounts(id),
    FOREIGN KEY (account_dest) REFERENCES accounts(id)
);

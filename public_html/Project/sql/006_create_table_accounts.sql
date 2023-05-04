CREATE TABLE IF NOT EXISTS RM_Accounts(
    id int AUTO_INCREMENT PRIMARY KEY,
    account_number varchar(12) unique NOT NULL,
    user_id INT NOT NULL,
    balance DECIMAL(10, 2) DEFAULT 0.00,
    account_type VARCHAR(255),
    created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    modified TIMESTAMP DEFAULT CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES Users(id),
    check ((account != '000000000000'balance >= 0) AND LENGTH(account) = 12)
)
INSERT INTO accounts (id, account_number, user_id, balance, account_type, created, modified) 
SELECT -1, '000000000000', id, 0, 'world', NOW(), NOW() 
FROM users 
WHERE username = 'system';
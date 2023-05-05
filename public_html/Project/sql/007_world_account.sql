INSERT INTO accounts (id, account_number, user_id, balance, account_type, created, modified) 
SELECT -1, '000000000000', id, 0, 'world', NOW(), NOW() 
FROM users 
WHERE username = 'system';
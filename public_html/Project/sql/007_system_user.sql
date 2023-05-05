INSERT INTO users (id, username, password, email) VALUES (-1, 'system', 'password', 'system@domain.com')
ON DUPLICATE KEY UPDATE username='system', password='password', email='system@domain.com';

ALTER TABLE Users ADD COLUMN username varchar(30) 
not null unique default (substring_index(email, '@', 1)) 
COMMENT 'Username field that defaults to the name of the email given';
ALTER TABLE Users ADD COLUMN first_name VARCHAR(50) NOT NULL DEFAULT ''
not null unique default (substring_index(email, '@', 1)) 
COMMENT 'Username field that defaults to the name of the email given';
ALTER TABLE Users ADD COLUMN last_name VARCHAR(50) NOT NULL DEFAULT ''
not null unique default (substring_index(email, '@', 1)) 
COMMENT 'Username field that defaults to the name of the email given';

DROP TABLE users;

CREATE TABLE IF NOT EXISTS users (
  id int(5) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  username VARCHAR(50) NOT NULL UNIQUE,
  email VARCHAR(255) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL,
  date_registration TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  admin TINYINT(1) NOT NULL DEFAULT 0
) DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

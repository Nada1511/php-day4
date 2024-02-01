
CREATE DATABASE IF NOT EXISTS user_registration;
USE user_database;

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    gender VARCHAR(10) NOT NULL,
    email_status VARCHAR(3) NOT NULL DEFAULT 'No';
);
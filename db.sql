CREATE DATABASE investment_db;
USE investment_db;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) UNIQUE,
    password VARCHAR(255)
);

CREATE TABLE deposits (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user VARCHAR(255),
    amount DECIMAL(10,2),
    transaction_id VARCHAR(255),
    status ENUM('pending', 'approved') DEFAULT 'pending'
);

-- Create database
CREATE DATABASE IF NOT EXISTS service_provider_app;
USE service_provider_app;

-- Create users table
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    phone VARCHAR(20),
    password VARCHAR(255) NOT NULL,
    role ENUM('admin', 'user') DEFAULT 'user',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Create services table
CREATE TABLE IF NOT EXISTS services (
    id INT AUTO_INCREMENT PRIMARY KEY,
    provider_id INT,
    title VARCHAR(100) NOT NULL,
    description TEXT,
    price DECIMAL(10,2),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (provider_id) REFERENCES users(id) ON DELETE CASCADE
);

-- Insert default admin user
-- Password: admin123 (hashed)
INSERT INTO users (username, email, phone, password, role) 
VALUES (
    'admin',
    'admin@example.com',
    '1234567890',
    '$2y$10$8tqwNn.bpTqzHzKVWDgN2.eMQDCzXvMHxeHHKYwqeVcSjxHkCYbgG',
    'admin'
);
CREATE DATABASE hotel_management;

USE hotel_management;

CREATE TABLE employees (
    id INT PRIMARY KEY AUTO_INCREMENT,
    employee_name VARCHAR(255) NOT NULL,
    employee_id VARCHAR(50) NOT NULL UNIQUE,
    role VARCHAR(100) NOT NULL
);

CREATE TABLE guests (
    id INT PRIMARY KEY AUTO_INCREMENT,
    guest_name VARCHAR(255) NOT NULL,
    reservation_number VARCHAR(50) NOT NULL UNIQUE,
    check_in_date DATE,
    check_out_date DATE,
    room_number VARCHAR(10)
);

CREATE TABLE rooms (
    id INT PRIMARY KEY AUTO_INCREMENT,
    room_type VARCHAR(100),
    room_size INT,
    services VARCHAR(255),
    price DECIMAL(10, 2)
);

CREATE TABLE reservations (
    id INT PRIMARY KEY AUTO_INCREMENT,
    guest_name VARCHAR(255) NOT NULL,
    room_selection VARCHAR(50),
    check_in_date DATE,
    check_out_date DATE
);

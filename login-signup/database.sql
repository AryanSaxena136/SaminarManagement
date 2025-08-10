CREATE DATABASE portal;

USE portal;

-- Student Table
CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    college_id VARCHAR(50) UNIQUE,
    email VARCHAR(100),
    password VARCHAR(255)
);

-- Teacher Table
CREATE TABLE teachers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    employee_id VARCHAR(50) UNIQUE,
    email VARCHAR(100),
    password VARCHAR(255)
);

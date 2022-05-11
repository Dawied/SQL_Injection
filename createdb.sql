CREATE DATABASE veiligprogrammeren;

USE veiligprogrammeren;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    password VARCHAR(100),
    role VARCHAR(20)
);


INSERT INTO users (name, password, role)
VALUES
    ('admin', 'veilig123', 'ADMIN'),
    ('david', 'gandalf', 'USER'),
    ('joop', 'gimli', 'USER');
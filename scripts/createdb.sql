CREATE DATABASE veiligprogrammeren;

USE veiligprogrammeren;

CREATE TABLE ourshop_users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    password VARCHAR(100),
    role VARCHAR(20)
);

INSERT INTO ourshop_users (name, password, role)
VALUES
    ('admin', 'veilig123', 'ADMIN'),
    ('david', 'gandalf', 'USER'),
    ('joop', 'gimli', 'USER');

CREATE TABLE ourshop_articles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    price DECIMAL(5,2)
);

INSERT INTO ourshop_articles (name, price)
VALUES
    ('Handschoen', 10),
    ('Onderbroek', 25),
    ('Tandpasta', 2);

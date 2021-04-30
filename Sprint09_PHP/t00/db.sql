CREATE DATABASE IF NOT EXISTS sword;
CREATE USER IF NOT EXISTS 'vveklenko'@'localhost' IDENTIFIED WITH mysql_native_password BY 'securepass';
GRANT ALL PRIVILEGES ON * . * TO 'vveklenko'@'localhost';
FLUSH PRIVILEGES;
USE sword;
CREATE TABLE IF NOT EXISTS users 
(
    id          INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    login       VARCHAR(50) UNIQUE  NOT NULL,
    password    VARCHAR(50) NOT NULL,
    name        VARCHAR(100) NOT NULL,
    email       VARCHAR(50) UNIQUE  NOT NULL,
    is_admin    boolean DEFAULT 0 NOT NULL
);
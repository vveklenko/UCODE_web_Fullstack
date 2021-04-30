CREATE DATABASE IF NOT EXISTS ucode_web;
CREATE USER 'vveklenko'@'localhost' IDENTIFIED WITH mysql_native_password BY 'securepass';
GRANT ALL PRIVILEGES ON * . * TO 'vveklenko'@'localhost';
FLUSH PRIVILEGES;

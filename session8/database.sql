
CREATE DATABASE mvc_todo_app CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE mvc_todo_app;
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100),
    password VARCHAR(255)
);
INSERT INTO users (email,password) VALUES ('user@example.com',MD5('password'));

CREATE TABLE tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    task VARCHAR(255)
);
INSERT INTO tasks (task) VALUES ('Buy groceries'), ('Wash car'), ('Pay bills');

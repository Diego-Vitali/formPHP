CREATE DATABASE banco;

USE banco;

CREATE TABLE pessoas(
	ID INT PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(55),
    email VARCHAR(55),
    idade INT,
    cidade VARCHAR(55)
);


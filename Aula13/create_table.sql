CREATE DATABASE login;
USE login;
CREATE TABLE usuarios(
    email varchar(100) not null,
    senha varchar(50) not null,
    PRIMARY KEY(email)
);
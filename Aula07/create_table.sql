create database aula_php;
use aula_php;
create table alunos(
    matricula varchar(25) not null,
    nome varchar(100) not null,
    curso varchar(50) not null,
    email varchar(100) not null,
    telefone varchar(50) not null,
    endereco varchar(100) not null,
    cep varchar(25) not null,
    cidade varchar(50) not null,
    uf varchar(2) not null,
    hcomp varchar(25) not null,
    chor varchar(25) not null,
    primary key (matricula)
);
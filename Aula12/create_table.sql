create database escola;
use escola;
create table funcionario(
    cpf varchar(15) not null,
    nome varchar(100) not null,
    endereco varchar(100) not null,
    cidade varchar(50) not null,
    estado varchar(2),
    telefone varchar(11),
    formacao varchar(25),
    nivelEscolar varchar(25),
    primary key (cpf)
);
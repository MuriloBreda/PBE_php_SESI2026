create database Biblioteca;
use Biblioteca;

create table Livros (
	ID integer auto_increment primary key,
    TITULO varchar(255),
    AUTOR varchar(255),
    ANO integer,
    EDITORA varchar(255)
);

select * from Livros;
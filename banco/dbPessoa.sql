create database dbCRUD;

go
use dbCRUD;

create table pessoa(
	idPessoa int primary key identity(1,1),
	nomePessoa varchar(40),
	telefonePessoa varchar(15),
	emailPessoa varchar(50)
);

select * from pessoa

delete from pessoa
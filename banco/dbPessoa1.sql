create database dbPessoa

go 
use dbPessoa


create table tbPessoa(
	idPessoa int primary key identity(1,1),
	nomePessoa varchar(120),
	telefonePessoa varchar(15),
	emailPessoa varchar(120),
	dtCadastro smalldatetime default getdate()
);


insert into tbPessoa(nomePessoa, telefonePessoa, emailPessoa)
values
('Newton', '(11) 95821-1648', 'n@gmail.com'), 
('Mauro', '(11) 95821-1648', 'mauro@gmail.com'), 
('Luana', '(11) 95821-1648', 'luana@gmail.com')

select * from tbPessoa

delete from tbpessoa where idPessoa = 2
create database dbCRUDAnimal


go 
use dbCRUDAnimal

create table tbAnimal(
	idAnimal int primary key identity(1,1),
	nomeAnimal varchar(100),
	dtNascimento date,
	racaAnimal varchar(100),
	nomeDono varchar(100),
	dtCadastro smalldatetime default getdate()
);

insert into tbAnimal (nomeAnimal, dtNascimento, racaAnimal, nomeDono)
values
('Scooby-Doo', '20/06/1989', 'Dog Alemão', 'Marlene'),
('Pluto', '05/07/1950', 'Vira-lata', 'Marlene'),
('Mutlley', '06/02/1980', 'Vira-lata','Jairo'),
('Garfield', '01/02/2003', 'Persa', 'Newton'),
('Stuart little', '02/07/1999', 'Cobaia', 'Nozomi')

	

drop table tbAnimal

select * from tbAnimal
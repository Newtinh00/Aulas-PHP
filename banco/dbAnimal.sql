create database dbAnimal;

go
use dbAnimal;

create table tbAnimal(
	idAnimal int primary key identity(1,1),
	nomeAnimal varchar(254) not null,
	dtNascAnimal date not null,
	racaAnimal varchar(50) not null,	
	dtCadastro smalldatetime default getdate()
);

INSERT INTO tbAnimal(nomeAnimal, dtNascAnimal, racaAnimal)
VALUES
('Marley', '15/02/2015', 'Vira-lata'),
('Mingau', '02/03/2014', 'Persa'),
('Joaquim', '07/01/2017', 'Siamês'),
('Scooby-Doo', '02/06/1964', 'Pastro Alemão')

select * from tbAnimal

update tbAnimal set nomeAnimal = 'Ajudante de Papai Noel' where idAnimal = 6
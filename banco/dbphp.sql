create database dbphp;

go 
use dbphp;

create table tb_usuarios(
	idusuario int primary key identity(1,1) not null,
	deslogin varchar(64) not null,
	desenha varchar(256) not null,
	dtcadastro smalldatetime default GETDATE()
);

drop table tb_usuarios

insert into tb_usuarios(deslogin,desenha)
values
('Italo', '1284818567'),
('Mariana', '4785sdfy'),
('Joaquim', 'asduiahusda'),
('Julia', 'dyigweuidw'),
('Aline', 'duhqwiod'),
('Jaqueline', 'lpokoijicid'),
('Larissa', 'asjiasijaosa'),
('Giovanna', '5645848499'),
('Stella', '8784xaxa')
;

select * from tb_usuarios;


SELECT @@IDENTITY;
SELECT SCOPE_IDENTITY();
SELECT * FROM tb_usuarios WHERE idusuario = IDENT_CURRENT('tb_usuarios');

EXEC sp_usuarios_insert 'jairo', '14777'; 
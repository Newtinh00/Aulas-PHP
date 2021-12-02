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
values(
'Jeferson', '1218567'
);

select * from tb_usuarios;
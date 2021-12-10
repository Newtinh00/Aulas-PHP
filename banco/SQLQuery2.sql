CREATE PROCEDURE sp_usuarios_insert @pdeslogin varchar(64), @pdesenha varchar(256)
AS
INSERT INTO tb_usuarios(deslogin, desenha) VALUES (@pdeslogin, @pdesenha);
SELECT * FROM tb_usuarios WHERE idusuario = IDENT_CURRENT('tb_usuarios');
GO
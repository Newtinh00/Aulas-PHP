<?php 

require_once("config.php");


/*$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);*/



//Carrega somente um usuário pelo id 
//$root = new Usuario();
//$root->loadById(5);
//echo $root;



//Carrega uma lista de usuários
//$lista = Usuario::getLista();
//echo json_encode($lista);



//Carrega uma lista de usuários, buscando pelo login
//$busca = Usuario::search("s");
//echo json_encode($busca);



//Carrega um usuário usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("Newton", "123456789");
//echo $usuario;



//Insert de um novo usuário
//$aluno = new Usuario();

//$aluno->setDeslogin('Manuela');
//$aluno->setDesenha('12478569sp.ae');

//$aluno->insert();

//echo $aluno;



//Alterar um usuário
//$usuario = new Usuario();

//$usuario->loadById(8);
//$usuario->update("professor", "sdhsidishdis");
//echo $usuario;


//Deletar Um usuário
$usuario = new Usuario();

$usuario->loadById(19,20,21,22);
$usuario->delete();

echo $usuario;

?>
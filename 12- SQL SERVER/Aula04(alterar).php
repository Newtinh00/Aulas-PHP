<?php 

$conn = new PDO("sqlsrv:Database=bdphp7;server=localhost\SQLEXPRESS1;ConnectionPooling=0","sa","root");

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");
//statement significa comand

$login = "Joao";
$password= "78452";
$id = 2;

$stmt->bindParam(":LOGIN", $login); //Quer dizer ligar, esse login a esse valor
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Alterado OK";
 ?>

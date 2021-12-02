<?php 

$conn = new PDO("sqlsrv:Database=dbphp; server=localhost\SQLEXPRESS1; ConnectionPooling=0", "sa", "root");


$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario=:ID");

$id = 1;

$stmt->bindParam(":ID", $id);
$stmt->execute();

echo "Dado excluido com sucesso";

 ?>
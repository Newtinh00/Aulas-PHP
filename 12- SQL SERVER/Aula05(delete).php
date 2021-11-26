<?php 

$conn = new PDO("sqlsrv:Database=bdphp7;server=localhost\SQLEXPRESS1;ConnectionPooling=0","sa","root");

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");
//statement significa comand

$id = 1;

$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Deletado OK";
 ?>

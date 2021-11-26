<?php 

$conn = new PDO("sqlsrv:Database=bdphp7;server=localhost\SQLEXPRESS1;ConnectionPooling=0","sa","root");

$conn->beginTransaction(); 

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 3;

$stmt->execute(array($id));

//$conn->rollback(); //ele cancela a ação
$conn->commit(); //ele permite a ação

echo "Delete OK";

 ?>
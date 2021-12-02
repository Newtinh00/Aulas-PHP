<?php 

$conn =  new PDO("sqlsrv:Database=dbphp; server=localhost\SQLEXPRESS1; ConnectionPooling=0", "sa", "root");

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin=:LOGIN, desenha=:PASSWORD WHERE idusuario =:ID");

$login = "Willian";
$password = "78955481";
$id = 3;

$stmt->bindParam(':LOGIN', $login);
$stmt->bindParam(':PASSWORD', $password);
$stmt->bindParam(':ID', $id);

$stmt->execute();

echo "Dados alterados com sucesso";
 ?>
<?php 

$conn = new PDO("sqlsrv:Database=dbphp; server=localhost\SQLEXPRESS1; ConnectionPooling=0", "sa", "root");

$stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin, desenha) VALUES (:LOGIN, :PASSWORD)");

$login = "José";
$password = "12345454";

$stmt->bindParam(":LOGIN", $login); //bind significar ligar ou unir
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();

echo "Dados inseridos com sucesso!";
 ?>
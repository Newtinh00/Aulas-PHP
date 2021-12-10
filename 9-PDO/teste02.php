<?php 

$conn = new PDO("sqlsrv:Database=dbphp; server=localhost\SQLEXPRESS1; ConnectionPooling=0", "sa", "root");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, desenha) VALUES (:LOGIN, :PASSWORD)");

$login = "Newton";
$password = "123456789";

$stmt->bindParam(':LOGIN', $login);
$stmt->bindParam(':PASSWORD', $password);

$stmt->execute();

echo "Dados inseridos com sucesso, pô";

 ?>
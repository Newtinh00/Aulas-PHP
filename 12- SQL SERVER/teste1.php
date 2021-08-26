<?php 

$conn = new PDO("sqlsrv:Database=bdphp7;server=localhost\SQLEXPRESS1;ConnectionPooling=0","sa", "root");


$stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)");

$login = "Willian";
$password="12458";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD",$password);

$stmt->execute();

echo "Ok!";


 ?>
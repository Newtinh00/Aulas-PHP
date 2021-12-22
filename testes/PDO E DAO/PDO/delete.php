<?php 

$conn = new PDO("sqlsrv:Database=dbAnimal; server=localhost\SQLEXPRESS1; ConnectionPooling=0", 'sa', 'root');

$stmt = $conn->prepare("DELETE FROM tbAnimal WHERE idAnimal = :ID");

$id = 7;

$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Animal deletado com sucesso!";

 ?>
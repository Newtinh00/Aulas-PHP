<?php 

$conn = new PDO("sqlsrv:Database=dbAnimal; server=localhost\SQLEXPRESS1; ConnectionPooling=0", 'sa', 'root');

$stmt = $conn->prepare("UPDATE tbAnimal SET nomeAnimal = :NOME, dtNascAnimal = :DTNASC, racaAnimal = :RACA WHERE idAnimal = :ID");

$nome = "Bola de Neve III";
$dtNasc = "02/02/1989";
$raca = "Vira-lata";
$id = 6;


$stmt->bindParam(":NOME", $nome);
$stmt->bindParam(":DTNASC", $dtNasc);
$stmt->bindParam(":RACA", $raca);
$stmt->bindParam(":ID", $id);

$stmt->execute();


echo "Dados Alterados com sucesso!";



 ?>
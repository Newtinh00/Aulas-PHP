<?php 

$conn = new PDO("sqlsrv:Database=dbAnimal; server=localhost\SQLEXPRESS1; ConnectionPooling=0", 'sa', 'root');


$stmt = $conn->prepare("INSERT INTO tbAnimal (nomeAnimal, dtNascAnimal, racaAnimal) VALUES(:NOME, :DTNASC, :RACA)");

$nome = "Bola de Nev IV";
$dtNasc = "20/02/1989";
$raca = "Pelado";

$stmt->bindParam(":NOME", $nome);
$stmt->bindParam(":DTNASC", $dtNasc);
$stmt->bindParam(":RACA", $raca);

$stmt->execute();

echo "Cadastrado com sucesso!";

 ?>
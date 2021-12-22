<?php 

$conn = new PDO("sqlsrv:Database=dbAnimal; server=localhost\SQLEXPRESS1; ConnectionPooling=0", 'sa', 'root');

$stmt = $conn->prepare("SELECT * FROM tbAnimal ORDER BY idAnimal");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($results);


 ?>
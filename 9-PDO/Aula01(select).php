<?php 

$conn = new PDO("sqlsrv:Database=dbphp; server=localhost\SQLEXPRESS1; ConnectionPooling=0", "sa", "root");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY idusuario");

$stmt->execute(); //ele starta o prepare

$results = $stmt->fetchAll(PDO::FETCH_ASSOC); // Ele fatia o retorno em linhas

echo json_encode($results);

 ?>
<?php 


$conn = new PDO("sqlsrv:Database=dbphp; server=localhost\SQLEXPRESS1; ConnectionPooling=0", "sa", "root");


$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");
$stmt->execute(); 

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($results);


 ?>
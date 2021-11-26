
<?php 

$conn = new PDO("sqlsrv:Database=bdphp7;server=localhost\SQLEXPRESS1;ConnectionPooling=0","sa","root"); 
// "String de conexão; server;"

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin;");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($results);

 ?>

<?php 
/*
$conn = new PDO("sqlsrv:Database=bdphp7;server=localhost\SQLEXPRESS1;ConnectionPooling=0","sa","root"); 
// "String de conexão; server;"

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin;");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($results);


 ?>*/
<<<<<<< HEAD
<?php 

$conn = new PDO("sqlsrv:Database=bdphp7;server=localhost\SQLEXPRESS1;ConnectionPooling=0","sa", "root");


$stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)");

$login = "Willian";
$password="12458";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD",$password);

$stmt->execute();

echo "Ok!";


=======
<?php 

$conn = new PDO("sqlsrv:Database=bdphp7;server=localhost\SQLEXPRESS1;ConnectionPooling=0","sa", "root");


$stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)");

$login = "Willian";
$password="12458";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD",$password);

$stmt->execute();

echo "Ok!";


>>>>>>> 712fa2b19aab12c52b9994a0cfa3388e37d9c41f
 ?>
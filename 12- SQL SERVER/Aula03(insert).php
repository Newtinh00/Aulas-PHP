<<<<<<< HEAD
<?php 

$conn = new PDO("sqlsrv:Database=bdphp7;server=localhost\SQLEXPRESS1;ConnectionPooling=0","sa","root");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(:LOGIN,:PASSWORD)");
//statement significa comand

$login = "jose";
$password= "1234567890";

$stmt->bindParam(":LOGIN", $login); //Quer dizer ligar, esse login a esse valor
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();

echo "Inserido OK";
=======
<?php 

$conn = new PDO("sqlsrv:Database=bdphp7;server=localhost\SQLEXPRESS1;ConnectionPooling=0","sa","root");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(:LOGIN,:PASSWORD)");
//statement significa comand

$login = "jose";
$password= "1234567890";

$stmt->bindParam(":LOGIN", $login); //Quer dizer ligar, esse login a esse valor
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();

echo "Inserido OK";
>>>>>>> 712fa2b19aab12c52b9994a0cfa3388e37d9c41f
 ?>
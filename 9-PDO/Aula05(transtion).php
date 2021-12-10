<?php 

$conn = new PDO("sqlsrv:Database=dbphp; server=localhost\SQLEXPRESS1; ConnectionPooling=0", "sa", "root");

$conn->beginTransaction();


$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?"); // Qualquer ponto de interrogação da minha query será indicada no array do execute, então o programa vai seguir com a operação ou não, depende o rollback ou do commit

$id = 3;

$stmt->execute(array($id));

//$conn->rollback();
$conn->commit();

echo "Erro";

 ?>
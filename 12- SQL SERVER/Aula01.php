<<<<<<< HEAD
<?php 


$conn = new PDO("mysql:dbname=bdphp7; host=localhost", "root", "");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC); //ele vai fatiar todas as linhas; vai ter todos os resultados


foreach ($results as $row){
	foreach ($row as $key => $value) {
		echo "<strong>".$key.": </strong>".$value."<br/>";
	}
}

echo "====================================================<br>";

var_dump($results);

 ?>
=======
<?php 


$conn = new PDO("mysql:dbname=bdphp7; host=localhost", "root", "");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC); //ele vai fatiar todas as linhas; vai ter todos os resultados


foreach ($results as $row){
	foreach ($row as $key => $value) {
		echo "<strong>".$key.": </strong>".$value."<br/>";
	}
}

echo "====================================================<br>";

var_dump($results);

 ?>
>>>>>>> 712fa2b19aab12c52b9994a0cfa3388e37d9c41f
 
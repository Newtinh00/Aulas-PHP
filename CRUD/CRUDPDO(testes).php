<?php 

try {

	$conn = new PDO("sqlsrv:Database=dbCRUD; server=localhost\SQLEXPRESS1; ConnectionPooling=0", 'sa', 'root');
//Database
//server
//ConnectionPooling=0
//usuario e senha

} catch (PDOException $e) {
	echo "Erro com banco de dados: " . $e->getMessage();
}
catch(Exception $e){
	echo "Erro Genérico: " . $e->getMessage();
}
/*
//------- Insert ---------//

$stmt = $conn->prepare("INSERT INTO pessoa (nomePessoa, telefonePessoa, emailPessoa) VALUES (:NOME, :TELEFONE, :EMAIL)");

//$conn->query("INSERT INTO pessoa (nomePessoa, telefonePessoa, emailPessoa) VALUES ('Paulo', '12251785', 'teste1@gmail.com')");

$stmt->bindValue(":NOME", "Newton");
$stmt->bindValue(":TELEFONE", "11958211619");
$stmt->bindValue(":EMAIL", "newtonpaul18@gmail.com");

$stmt->execute();
*/


//------- Select -------//

$stmt = $conn->prepare("SELECT * FROM pessoa ORDER BY nomePessoa");
$stmt->execute();

$results = $stmt->fetch(PDO::FETCH_ASSOC);

	foreach ($results as $key => $value) {
				
		echo $key.": ". $value. "<br>";

	}

 ?>
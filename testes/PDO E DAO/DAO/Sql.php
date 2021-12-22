<?php 


class Sql extends PDO{

	private $conn;

	public function __construct(){

		$this->conn = new PDO("sqlsrv:Database=dbAnimal; server=localhost\SQLEXPRESS1; ConnectionPooling=0", 'sa', 'root');
	}

	public function query(string $rawQuery, $params = array(), ...$fetchModeArgs){

			$stmt = $this->conn->prepare($rawQuery);

			$this->setParams($stmt, $params);

			$stmt->execute();
			return $stmt;
	}


	private function setParams($statment, $parameters = array()){

		foreach ($parameters as $key => $value) {

			$statment->setParam($key, $value);

		}
	}

	private function setParam($statment, $key, $value){

		$statment->bindParam($statment, $key, $value);
	}

	public function select($rawQuery, $params = array()){

		$stmt = $this->query($rawQuery, $params);

		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
   
}

$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tbAnimal");
echo json_encode($usuarios);


 ?>
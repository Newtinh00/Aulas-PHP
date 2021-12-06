<?php 


class Sql extends PDO{


	private $conn;

	public function __construct(){
		$this->conn = new PDO("sqlsrv:Database=dbphp; server=localhost\SQLEXPRESS1; ConnectionPooling=0", "sa", "root");
	}


	public function query(string $rawQuery, $params = array(), ...$fetchModeArgs){

		$stmt = $this->conn->prepare($rawQuery);

		$this->setParams($rawQuery, $params);

		$stmt->execute();

		return $stmt;

	}

	private function setParams($statment, $parameters=array()){

		foreach ($parameters as $key => $value) {

			$this->$statment->setParam($statment, $key, $value);
		}

	}

	private function setParam($statment, $value, $key){

		$statment->bindParam($key, $value);
	}


	public function select($rawQuery, $params = array()){

		$stmt = $this->query($rawQuery, $params);

		return $stmt->fetchAll(PDO::FETCH_ASSOC);

	}


}

 ?>
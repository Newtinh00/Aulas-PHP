<?php 

class Sql extends PDO{

	private $conn;

	public function __constructor(){

		$this->conn = new PDO("sqlsrv:Database=dbphp; server=localhost\SQLEXPRESS1; ConnectionPooling=0", "sa", "root");
	}

	private function setParams($statment, $parameters = array()){

		foreach ($parameters as $key => $value) {

				$this->setParam($key, $value);
			}	
	}

	private function setparam($statment, $key, $value){

		$statment->bindParam($key, $value);


	}

	public function query($rawQuery, $params = array()){

		$stmt = $this->conn->prepare($rawQuery);

		$this->setParams($stmt, $params);

		return $stmt->execute();
		}
	}

	public function select($rawQuery, $params=aray()){
		$stmt = $this->query($rawQuery, $params);
		
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
}


 ?>
<?php

class Sql extends PDO {

    private $conn;

    public function __construct() {

    $this->conn = new PDO("sqlsrv:Database=dbphp; server=localhost\SQLEXPRESS1; ConnectionPooling=0", "sa", "root");
    }


    //O método abaixo só faz a query, a consulta no banco de dados
    public function query(string $rawQuery, $params = array(), ...$fetchModeArgs){
  
        $stmt = $this->conn->prepare($rawQuery); //Query do próprio SQL

        $this->setParams($stmt, $params);

        $stmt->execute();

        return $stmt;

    }

    private function setParam($statment, $key, $value){

        $statment->bindParam($key, $value);

    }

    private function setParams($statment, $parameters = array()){

        foreach ($parameters as $key => $value) {

            $this->setParam($statment, $key, $value);

        }

    }

    public function select($rawQuery, $params = array()):array
    {

        $stmt = $this->query($rawQuery, $params);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

}

?>
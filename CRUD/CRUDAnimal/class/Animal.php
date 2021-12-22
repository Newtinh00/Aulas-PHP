<?php 

setlocale(LC_ALL, 'PT_br', 'PT-br,utf-8', 'portuguese');
date_default_timezone_set('AMERICA/SAO_PAULO');

class Animal{

	//Atríbutos
	private $conn;
	private $nomeAnimal;
	private $dtNascimento;
	private $racaAnimal;

	public function getNomeAnimal(){

		return $this->nomeAnimal;
	}

	public function setNomeAnimal($nomeAnimal){

		$this->nomeAnimal = $nomeAnimal;
	}

	public function getDtNascimento(){

		return $this->dtNascimento;
	}

	public function setDtNascimento($dtNascimento){

		$this->dtNascimento = $dtNascimento;
	}

	public function getRacaAnimal(){

		return $this->racaAnimal;
	}

	public function setRacaAnimal($racaAnimal){

		$this->racaAnimal = $racaAnimal;
	}

	//Construct com a String de Conexão

	public function __construct(){

		$this->conn = new PDO("sqlsrv:Database=dbCRUDAnimal; server=localhost\SQLEXPRESS1; ConnectionPooling=0", "sa", "root");
	}


	//6 Funções CRUD

	//SELECT

	public function buscarDados(){

		$results = array();

		$stmt = $this->conn->query("SELECT * FROM tbAnimal ORDER BY dtCadastro DESC");

		$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

		return $results;
	}


	//INSERT

	public function cadastraAnimal($nomeAnimal, $dtNascimento, $racaAnimal, $nomeDono){

		$stmt = $this->conn->prepare("SELECT idAnimal FROM tbAnimal where nomeDono = :NOME AND nomeAnimal = :ANIMAL");

		$stmt->bindValue(":NOME", $nomeDono);
		$stmt->bindValue(":ANIMAL", $nomeAnimal);
		$stmt->execute();

		if($stmt->rowCount()<0){ //Já 

			return false;
		}else{

			$stmt = $this->conn->prepare("INSERT INTO tbAnimal (nomeAnimal, dtNascimento, racaAnimal, nomeDono) VALUES (:NOME, :DTNASCIMENTO, :RACA, :NOMEDONO)");

			$stmt->bindValue(":NOME", $nomeAnimal);
			$stmt->bindValue(":DTNASCIMENTO", $dtNascimento);
			$stmt->bindValue(":RACA", $racaAnimal);
			$stmt->bindValue(":NOMEDONO", $nomeDono);

			$stmt->execute();

			return true;
		}

	}


//DELETE

	function excluirAnimal($id){

		$stmt = $this->conn->prepare("DELETE FROM tbAnimal WHERE idAnimal = :ID");

		$stmt->bindValue(":ID", $id);
		$stmt->execute();
	}

//UPDATE
//Buscar o usuário

	function buscarDadosAnimal($id){
		$stmt = $this->conn->prepare("SELECT * FROM tbAnimal WHERE idAnimal = :ID");
		$stmt->bindValue(":ID", $id);

		$stmt->execute();

		$results = $stmt->fetch(PDO::FETCH_ASSOC);

		return $results;
	}



	function atualizarDados($id, $nomeAnimal, $dtNascimento, $racaAnimal, $nomeDono){

		$stmt = $this->conn->prepare("UPDATE tbAnimal SET nomeAnimal = :NOME, dtNascimento = :DTNASC, racaAnimal = :RACA, nomeDono = :DONO WHERE idAnimal = :ID");

		$stmt->bindValue(":NOME", $nomeAnimal);
		$stmt->bindValue(":DTNASC", $dtNascimento);
		$stmt->bindValue(":RACA", $racaAnimal);
		$stmt->bindValue(":DONO", $nomeDono);
		$stmt->bindValue(":ID", $id);

		$stmt->execute();
	}

//FUNÇÕES EXTRAS

//Para formatar a data

	public function formataData($a){

		$dt = strtotime($a);
		$data = date('d/m/Y', $dt);

		return $data;
	}

//Para formatar a data e a Hora

	public function formataDataHora($a){

		$dt = strtotime($a);
		$data = date('d/m/Y', $dt);

		$hr = strtotime($a);
		$hora = date('H:i', $hr);

		$dataHora = $data ." às ". $hora;

		return $dataHora;
	}
}




 ?>
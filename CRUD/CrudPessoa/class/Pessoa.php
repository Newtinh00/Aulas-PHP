<?php 

class Pessoa{

	private $conn;

    public function __construct() {

    $this->conn = new PDO("sqlsrv:Database=dbCRUD; server=localhost\SQLEXPRESS1; ConnectionPooling=0", "sa", "root");
    }


	public function buscarDados(){

		$results = array();
		$stmt = $this->conn->query("SELECT * FROM pessoa");

		$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

		return $results;
	}

	public function cadastrarPessoa($nomePessoa, $telefonePessoa, $emailPessoa){

		//ANTES DE CADASTRAR, VERIFICAR SE JÁ TEM O E-MAIL

		$stmt = $this->conn->prepare("SELECT idPessoa FROM pessoa WHERE emailPessoa = :EMAIL");

		$stmt->bindValue(":EMAIL", $emailPessoa);
		$stmt->execute();

		if($stmt->rowCount() < 0){//email já estiver no banco

			return false;

		}else{ //email não foi encontrado

			$stmt = $this->conn->prepare("INSERT INTO pessoa (nomePessoa, telefonePessoa, emailPessoa) VALUES (:NOME, :TELEFONE, :EMAIL)");

			$stmt->bindValue(":NOME", $nomePessoa);
			$stmt->bindValue(":TELEFONE", $telefonePessoa);
			$stmt->bindValue(":EMAIL", $emailPessoa);

			$stmt->execute();

			return true;
		}

	}

	public function excluirPessoa($idPessoa){

		$stmt = $this->conn->prepare("DELETE FROM pessoa WHERE idPessoa =:ID");
		$stmt->bindValue(":ID", $idPessoa);
		$stmt->execute();
		
	}

//Atualizar dados

//BUSCAR DADOS DE UMA PESSOA
	public function buscarDadosPessoa($id){

		$results = array();

		$stmt = $this->conn->prepare("SELECT * FROM pessoa WHERE idPessoa = :ID");
		$stmt->bindValue(":ID", $id);
		$stmt->execute();

		$results = $stmt->fetch(PDO::FETCH_ASSOC);

		return $results;

	}

//ATUALIZAR DADOS NO BANCO DE DADOS
	public function atualizarDados($id, $nomePessoa, $telefonePessoa, $emailPessoa){
			$stmt = $this->conn->prepare("UPDATE pessoa SET nomePessoa = :NOME, telefonePessoa = :TELEFONE, emailPessoa = :EMAIL WHERE idPessoa = :ID");

			$stmt->bindValue(":NOME", $nomePessoa);
			$stmt->bindValue(":TELEFONE", $telefonePessoa);
			$stmt->bindValue(":EMAIL", $emailPessoa);
			$stmt->bindValue(":ID", $id);

			$stmt->execute();

	}

}

 ?>
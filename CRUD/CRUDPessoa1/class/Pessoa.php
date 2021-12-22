<?php 

setlocale(LC_ALL, "PT-br", "PT-br:utf-8", "portuguese");
date_default_timezone_set("AMERICA/SAO_PAULO");

class Pessoa{


	private $conn;


	public function __construct(){

		try {

			$this->conn = new PDO("sqlsrv:Database=dbPessoa; server=localhost\SQLEXPRESS1; ConnectionPooling=0", 'sa', 'root');

		}catch (PDOException $e) {

			echo "Erro no banco de dados: " . $e;
			
		}catch (PDOException $e){

			echo "Erro genérico: " . $e;

		}
	}

	//Funções do CRUD (CREATE, READ, UPDATE E DELETE)

	//1- SELECT

	public function buscarDados(){

			$stmt = $this->conn->query("SELECT * FROM tbPessoa ORDER BY dtCadastro DESC");
			$stmt->execute();

			$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

			return $results;
	}

	//2- INSERT

	public function cadastrarPessoa($nomePessoa, $telefonePessoa, $emailPessoa){

			$stmt = $this->conn->prepare("SELECT * FROM tbPessoa WHERE emailPessoa =:EMAIL");
			$stmt->bindValue(":EMAIL", $emailPessoa);

			$stmt->execute();

			if($stmt->rowCount()<0) {
				
				return false;

			}else{

				$stmt = $this->conn->prepare("INSERT INTO tbPessoa (nomePessoa, telefonePessoa, emailPessoa) VALUES (:NOME, :TELEFONE, :EMAIL)");

				$stmt->bindValue(":NOME", $nomePessoa);
				$stmt->bindValue(":TELEFONE", $telefonePessoa);
				$stmt->bindValue(":EMAIL", $emailPessoa);

				$stmt->execute();

				return true;
			}
		}

	//3- DELETE 
			public function excluiPessoa($id){

				$stmt = $this->conn->prepare("DELETE FROM tbPessoa WHERE idPessoa = :ID");
				$stmt->bindValue(":ID", $id);

				$stmt->execute();
			}

//FUNÇÕES EXTRAS

	//Formatar Data e Hora

	public function formatarDataHora($a){

		$dt = strtotime($a);
		$hr = strtotime($a);
		
		$data = date("d/m/Y",$dt) ." às ". date("H:i",$hr); 

		return $data;
	}
}

 ?>
<?php 


class Pessoa{

	public $nome;
	private $documento;

	public function getDocumento(){

		return $this->documento;
	}

	public function setDocumento($documento){

		$this->documento = $documento;
	}

	public function falar(){

		return "Oi, meu nome é " . $this->nome;
	}

}

class Professor extends Pessoa{

	public $titulo;

	public function falar(){

		return "Oi, meu nome é " . $this->nome;
	}

	public function darAula(){

		return "Aula de matemática";
	}
}


$mauro =  new Professor();
$mauro->nome = "Mauro";
$mauro->setDocumento("123456789");

echo $mauro->falar();
echo "<br>";
echo $mauro->darAula();
echo "<br>";
echo $mauro->getDocumento();


 ?>
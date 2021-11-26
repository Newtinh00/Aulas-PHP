<?php 

class Documento{

	private $numero;

	public function getNumero(){

		return $this->numero;
	}

	public function setNumero($numero){

		$this->numero = $numero;
	}
}


class CPF extends Documento{

	public function validar():bool{

		$numeroCPF = $this->getNumero(); //Aqui ele está pegando o atributo herdado e colocando na variável "$numeroCPF".

		//Validação do CPF

		echo $numeroCPF;

		return true;
	}

}

$doc = new CPF();
$doc->setNumero("123456488"); 

var_dump($doc->validar());

echo "<br>";

echo $doc->getNumero();
echo "<br>";





?>
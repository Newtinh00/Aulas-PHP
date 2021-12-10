<?php 


class Pessoa{

	public $nome = "Newton Paul";
	protected $idade = 21;
	private $senha = "123456";

	public function verDados(){

		echo get_class($this) . "<br>";

		echo $this->nome . "<br>";
		echo $this->idade . "<br>";
		echo $this->senha . "<br>";
	}
}

class Programador extends Pessoa{ //Herança

	public function verDados(){

		echo get_class($this) . "<br>"; //mostra em qual class estou

		echo $this->nome . "<br>";  //Herdou
		echo $this->idade . "<br>"; //Herdou
		echo $this->senha . "<br>"; //Não herdou :P
	}

}

$objeto = new Programador();

//echo $objeto->nome ."<br>";

$objeto->verDados();

 ?>
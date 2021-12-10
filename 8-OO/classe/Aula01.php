<?php 	


class Pessoa{

	public $nome; //Atributo

	public function fala(){ //Método

		return "O meu nome é ".$this->nome;
	} 

}

$newton = new Pessoa(); //É bom deixar os parenteses. Método construtor.
$newton->nome = "Newton"; //Aqui meu objeto está acessando o atributo $nome da classe Pessoa

echo $newton->fala();
 ?>
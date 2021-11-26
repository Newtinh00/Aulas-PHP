<?php 

class Cachorro{

	//#1 - Tenho que criar meu atributos e métodos

	public $nome;

	public function latir(){

		return "Au Au! Meu nome é ". $this->nome;
	}

}

	//#2 - Tenho que instanciar a minha classe e criando um objeto

	$snoopy = new Cachorro();

	//#3 - Acessando o atributo "$nome" pelo meu objeto "$snoopy"
	$snoopy->nome = "Snoopy";

	//#4 - Printando o método latir
	echo $snoopy->latir();






 ?>
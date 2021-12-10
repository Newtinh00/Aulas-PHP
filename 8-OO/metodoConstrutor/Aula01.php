<?php 


class Endereco{

	private $logradouro;
	private $numero;
	private $cidade;

	public function __construct($a, $b, $c){ #não precisa ser o mesmo nome

		$this->logradouro = $a;
		$this->numero = $b;
		$this->cidade = $c;
	}


	public function __destruct(){

		var_dump("Destruir");
	}
}

$meuEndereco = new Endereco("Rua Ademar Saraiva", "123", "Santos");
var_dump($meuEndereco);
unset($meuEndereco);

 ?>
<?php 

date_default_timezone_set('America/Sao_Paulo');
setlocale(LC_ALL, "pt-BR", "pt-BR.utf-8", "portuguese");

$ts = strftime('%H');

class Cliente{

	private $nome;

	public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function olaVisitante(){

		if($GLOBALS['ts'] >= 5 && $GLOBALS['ts'] <= 12){

			echo "Olá! ". $this->getNome(). "! Bom dia! Tudo bem?";

		} else if($GLOBALS['ts'] > 12  && $GLOBALS['ts'] <=18){

			echo "Olá! ". $this->getNome(). "! Boa tarde! Tudo bem?";

		}else{

			echo "Olá! ". $this->getNome(). "! Boa noite! Tudo bem?";

		}


	}
}

$cliente = new Cliente();
$cliente->setNome('Willian');

echo $cliente->olaVisitante();




 ?>
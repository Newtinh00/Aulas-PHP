<?php 

class Carro{

	private $modelo;
	private $motor;
	private $ano;


	public function getModelo(){

		return $this->modelo;
	}

	public function setModelo($modelo){ //precisa do parâmetro indicando quem eu quero mudar

		$this->modelo = $modelo; //O "$this->modelo" representa oq está sendo recebido no parametro e o outro é do atributo lá em cima. Ele estão relacionado nessa linha
	}

	public function getMotor(){

		return $this->motor;
	}

	public function setMotor($motor){

		$this->motor = $motor;
	}

	public function getAno():int{

		return $this->ano;
	}

	public function setAno($ano){

		$this->ano = $ano;
	}


	public function exibeCarro(){

		return array(
			"modelo"=>$this->getModelo(),
			"motor"=>$this->getMotor(),
			"ano"=>$this->getAno()
		);

	}

}


$camaro =  new Carro();

$camaro->setModelo("Camaro");
$camaro->setMotor("16 cavalos");
$camaro->setAno(1800);

print_r($camaro->exibeCarro()); //Printa um array

 ?>
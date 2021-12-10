<?php 

abstract class Animal{

	public function falar(){

		return "Som";
	}

	public function mover(){
		return "Anda";
	}
}

class Cachorro extends Animal{

	public function falar(){


		return "Late";
	}

}

class Gato extends Animal{

	public function falar(){
		return "Mia";
	}
}

class Passaro extends Animal{

	public function falar(){
		return "Canta";
	}

	public function mover(){
		return "Voa e ". parent::mover(); //Ele pega o retorno da classe principal
	}
}

$pluto = new Cachorro();

echo $pluto->falar();
echo "<br>";
echo $pluto->mover();

echo "<br> ...... <br>";

$garfield = new Gato();

echo $garfield->falar();
echo "<br>";
echo $garfield->mover();


echo "<br> ...... <br>";

$tweet = new Passaro();

echo $tweet->falar();
echo "<br>";
echo $tweet->mover();



 ?>
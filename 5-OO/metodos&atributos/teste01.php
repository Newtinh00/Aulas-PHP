<?php 


class Livro{

 	private $titulo;
 	private $editora;
 	private $ano;


 	public function getTitulo(){

 		return $this->titulo;
 	}

 	public function setTitulo($titulo){
 		
 		$this->titulo = $titulo;
 	}

 	public function getEditora(){

 		return $this->editora;
 	}

 	public function setEditora($editora){

 		$this->editora = $editora;
 	}

 	public function getAno(){

 		return $this->ano;
 	}

 	public function setAno($ano){
 		$this->ano = $ano;
 	}


 	public function exibeLivro(){

 		return array(
 			"titulo"=>$this->getTitulo(),
 			"editora"=>$this->getEditora(),
 			"ano"=>$this->getAno()
 		);
 	}
}

$guia = new Livro();

$guia->setTitulo("Guia Definitivo do Mochileiro das Galáxias");
$guia->setEditora("Harper");
$guia->setAno(2017);

print_r($guia->exibeLivro());


 ?>
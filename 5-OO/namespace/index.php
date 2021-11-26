<?php 

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Mauro");
$cad->setEmail("mauroRodrigues@gmail.com");
$cad->setSenha("123teste");


$cad->registrarVenda();

 ?>
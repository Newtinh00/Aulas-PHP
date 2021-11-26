<?php 

function ola(){

	$argumentos = func_get_args(); //Ela vai me devolver em um array todos os valores informados no parâmetro

	return $argumentos;
}

var_dump(ola("Bom dia"));

 ?>
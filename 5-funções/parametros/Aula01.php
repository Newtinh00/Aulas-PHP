<?php 
	
	// https://www.php.net/manual/pt_BR/timezones.america.php

	date_default_timezone_set('America/Sao_Paulo');
	$hora = date('H');

function ola($texto = "Visitante", $periodo ="Bom dia"){

	if($GLOBALS["hora"]>=04 && $GLOBALS["hora"]<=12){
		$periodo = "Bom dia!";
	}else if($GLOBALS["hora"]>12 && $GLOBALS["hora"]<=18){
		$periodo = "Boa tarde!";
	} else{
		$periodo = "Boa noite!";
	}

	return "Olá $texto! $periodo<br>";
}

echo ola(); //Sem nenhum parâmetro ele retorna o valor informado anteriormente
echo ola("Mauro");
echo ola("Eduarda");
echo ola("Willian");
echo ola("Nozomi");
echo ola("Driana");
echo ola("Jéssica");
echo ola("Stefani");


 ?>
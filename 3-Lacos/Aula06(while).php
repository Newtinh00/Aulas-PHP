<?php 

$condicao = true;


while ($condicao){

	$numero = rand(1,10); //randomizar números

	if($numero === 3){

		echo "Três! ";
		$condicao = false;
	}

	echo $numero." ";

}

 ?>
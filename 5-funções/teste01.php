<?php 

function soma($a,$b){

	return $a+$b;
}

function verNum($num){

	$num = $num%2;

	if($num==0){
		echo "é par";
	}else{
		echo "é ímpar";
	}
}
 

verNum(70);
//echo soma(2,10);

 ?>
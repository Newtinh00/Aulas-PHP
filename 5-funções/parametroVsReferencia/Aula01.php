<?php 


$a = 10;

function trocaValor(&$b){ //passagem de valor por referĂȘncia

	 $b += 50;

	 return $b;
}

echo trocaValor($a);
echo "<br>";
echo $a;






 ?>
<?php 


function soma(int ... $valores):string{

	return array_sum($valores);
}

var_dump(soma(2,2,6,10,52));
echo "<br>";
echo soma(25,33);
echo "<br>";
echo soma(1.5,3.2);

//Esse "int" no começo da função indica que os valores que entrarão serão convetidos para valores inteiros, já o "string" logo após tornará eles string na saída final
//O array_sum soma todos os itens dentro dele e devolve (sem limite)
 ?>
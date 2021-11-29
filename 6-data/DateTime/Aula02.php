<?php 

date_default_timezone_set('America/Sao_Paulo');

$dt = new DateTime(); //Instância da classe DateTime
$periodo = new DateInterval("P15D"); // "P"= plus adiciona 15 dias 

echo "Data atual: ";
echo $dt->format("d/m/Y H:i"); 
echo "<br>";
$dt->add($periodo);

echo "Data com 15 dias no futuro:";
echo $dt->format("d/m/Y H:i"); //setando os valores da classe no objeto $dt atráves da função "format".

//https://www.php.net/manual/en/dateinterval.construct.php#102976

 ?>
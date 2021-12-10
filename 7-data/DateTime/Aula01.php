<?php 

date_default_timezone_set('America/Sao_Paulo');

$dt = new DateTime(); //Instância da classe DateTime
 

echo $dt->format("d/m/Y H:i"); //setando os valores da classe no objeto $dt atráves da função "format".



 ?>
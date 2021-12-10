<?php 
	
date_default_timezone_set("America/Sao_Paulo");
setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

echo strftime('%A, %d de %B de %Y às %H:%M');
echo "<br>";
echo strftime('%c');
echo "<br>";
echo strftime('%D');
echo "<br>";
echo strftime('Hoje é %A, dia %d de %B de %Y, exatamente às %H:%M');


//https://www.php.net/manual/pt_BR/function.strftime.php
 ?>
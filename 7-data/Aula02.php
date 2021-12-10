<?php 

//$ts = strtotime("2000-06-18");
//$ts = strtotime("now");
$ts = strtotime("+1 week"); // é possível adicionar expressões

echo date("l, d/m/Y", $ts);

 ?>
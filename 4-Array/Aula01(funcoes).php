<?php 

$pessoas = array();

array_push($pessoas, array( //Função para adicionar mais itens no array
	"nome"=>'João',
	"idade"=>20
));

array_push($pessoas, array(
	"nome"=>'Glaucio',
	"idade"=>25
));

print_r($pessoas);
echo "<br>";
print_r($pessoas[0]); //vai me mostrar só index indicado
echo "<br>";
print_r($pessoas[0]['nome']); //vai me mostrar só chave indicada, nesse caso, o nome "joão"
 ?>
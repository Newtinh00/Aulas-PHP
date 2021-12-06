<?php 

spl_autoload_register(function($classNome){


	$fileName = $classNome. ".php";
	
	if(file_exists($fileName)){
		require_once($fileName);
	}


});


 ?>
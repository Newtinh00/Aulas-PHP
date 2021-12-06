<form>
	
	<input type="text" name="Nome">
	<input type="date" name="Nascimento">
	<input type="submit" value="Ok" >

</form>


<?php 

if(isset($_GET)){
	foreach ($_GET as $nome) {
		
		echo "Valor do campo: " . $nome ."<br>";
		echo "<hr>";

	}
}


 ?>
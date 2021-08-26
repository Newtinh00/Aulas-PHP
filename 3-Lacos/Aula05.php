<<<<<<< HEAD
<form>
	
	<input type="text" name="nome">
	<input type="date" name="nascimento">
	<input type="submit" value="OK">

</form>


<?php 

if(isset($_GET)){

		foreach ($_GET as $key => $value){

			echo "Nome do campo: " .$key. "<br>";
			echo "Valor do campo: ".$value. "<br>";
			echo "<hr>";

	}

}



=======
<form>
	
	<input type="text" name="nome">
	<input type="date" name="nascimento">
	<input type="submit" value="OK">

</form>


<?php 

if(isset($_GET)){

		foreach ($_GET as $key => $value){

			echo "Nome do campo: " .$key. "<br>";
			echo "Valor do campo: ".$value. "<br>";
			echo "<hr>";

	}

}



>>>>>>> 712fa2b19aab12c52b9994a0cfa3388e37d9c41f
 ?>
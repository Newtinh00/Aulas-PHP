<?php 


class Documento{

	private $numero;

	public function getNumero(){

		return $this->numero;
	}

	public function setNumero($numero){
		$resultado = Documento::validarCampo($numero);

		if($resultado === false){
			throw new Exception("Campo vazio", 1);
			
		}

		$this->numero = $numero;
	}

	public static function validarCampo($campo):bool{
		 if(empty($campo)) {
        	return false;
    } else{
    	echo "Há dado(s) no campo!! ";
    		return true;
    }
 
    
    	}
	}

#usando o método estático criando um objeto.
$campo = new Documento();
$campo->setNumero("12");

echo "<br>";

#usando um método estático sem criar um objeto, evocando diretamente ele.
var_dump(Documento::validarCampo("12"));

 ?>
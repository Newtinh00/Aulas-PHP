<?php 

#As interfaces não funcionam com variáveis. Somente Métodos.

interface Cartao{
	public function numCartao();
	public function numValidade();
}

interface Seguranca{

	public function pedirSenha();
	public function verificarLimite();
}

class Transacao implements Cartao, Seguranca{

	public function numCartao(){
		 echo "Insira o número do cartão de crédito";
	}

	public function numValidade(){
		 echo "Insira o número da validade do cartão de crédito";
	}

	public function pedirSenha(){
		 echo "Insira a senha do seu cartão de crédito";
	}

	public function verificarLimite(){
		 echo "Verificando o limite do cartão, por favor, aguarde";
	}

}

$transacao = new Transacao();

$transacao->numCartao();
echo "<br>"."Carregando..."."<br>";
$transacao->numValidade();
echo "<br>"."Carregando..."."<br>";
$transacao->pedirSenha();
echo "<br>"."Carregando..."."<br>";
$transacao->verificarLimite();


 ?>
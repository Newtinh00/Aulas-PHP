<?php 
	
	require_once("config.php");

	$p = new Pessoa();
 ?>

<!DOCTYPE html>
<html>
	<head>
		<title>Crud Pessoa</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="Estilos/css.css">
	</head>

	<body>

		<?php 

		//CADASTRAR NO BANCO

		if(isset($_POST['nomePessoa'])){

			$nomePessoa = addslashes($_POST['nomePessoa']);
			$telefonePessoa = addslashes($_POST['telefonePessoa']);
			$emailPessoa = addslashes($_POST['emailPessoa']);

			if(!empty($nomePessoa) && !empty($telefonePessoa) && !empty($emailPessoa)){

				if (!$p->cadastrarPessoa($nomePessoa, $telefonePessoa, $emailPessoa)){

						echo "E-mail já cadastrado!";

					}else{

						$p->cadastrarPessoa($nomePessoa, $telefonePessoa, $emailPessoa);
					}
			}else{

				echo "Preencha todos os campos!";
			}
			
		}

		 ?>

		<section class="esquerda">
			
			<form method="POST">
				
				<input type="text" name="nomePessoa" id="nomePessoa" placeholder="Nome">
				<input type="text" name="telefonePessoa" id="telefonePessoa" placeholder="Telefone">
				<input type="email" name="emailPessoa" id="emailPessoa" placeholder="E-mail">

				<input type="submit" name="" value="Cadastrar">
			</form>

		</section>


		<section class="direita">

		<?php 

			$dados = $p->buscarDados();

		?>
			<table>
				<tr id="titulo">
					<td>Nome</td>
					<td>Telefone</td>
					<td>Email</td>
					<td>Data de Cadastrado</td>
					<td colspan="2"></td>
				</tr>

				
				<?php 

					if(count($dados)>0){

						for($i=0; $i<count($dados); $i++){

							echo "<tr>";

							foreach ($dados[$i] as $k => $v) {

								if ($k != 'idPessoa'){

									if ($k == 'dtCadastro') {
										
										
										 echo "<td>". $p->formatarDataHora($v). "</td>";
									}else{
										echo "<td>".$v."</td>";
									}
									
								}
							}

				?>
					<td>
						<a href="">Editar</a>
						<a href="index.php?idPessoa=<?php echo $dados[$i]['idPessoa']?>">Excluir</a>
					</td>			
				<?php
							echo "</tr>";
						}

					} else{
						echo "Não há dados no banco";
					}
						
				?>
					

				
			</table>

		</section>

	</body>
</html>

<?php 

 	if(isset($_GET['idPessoa'])){

 		$idPessoa = addslashes($_GET['idPessoa']);
 		$p->excluiPessoa($idPessoa);

 		header("location: index.php");
 	}
 ?>
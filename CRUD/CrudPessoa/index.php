<?php 

require_once("Config.php");

$p = new Pessoa();

 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>

	<?php 

		if(isset($_POST['nomePessoa'])){ //CLICOU NO BOTÃO CADASTRAR OU EDITAR

			//EDITAR INFORMAÇÃO
			if(isset($_GET['idUpdate']) && !empty($_GET['idUpdate'])){

					$idUpdate = addslashes($_GET['idUpdate']);

					$nomePessoa = addslashes($_POST['nomePessoa']);
					$telefonePessoa = addslashes($_POST['telefonePessoa']);
					$emailPessoa = addslashes($_POST['emailPessoa']);

					if (!empty($nomePessoa) && !empty($emailPessoa) && !empty($telefonePessoa)) {
						
						$p->atualizarDados($idUpdate, $nomePessoa, $telefonePessoa, $emailPessoa);
						header("location: index.php");
					}
					else{

						echo "Preencha todos os campos";
					}

				}

			//CADASTRAR INFORMAÇÃO
			else{

				$nomePessoa = addslashes($_POST['nomePessoa']);
				$telefonePessoa = addslashes($_POST['telefonePessoa']);
				$emailPessoa = addslashes($_POST['emailPessoa']);

				if (!empty($nomePessoa) && !empty($emailPessoa) && !empty($telefonePessoa)) {
					
					if(!$p->cadastrarPessoa($nomePessoa, $telefonePessoa, $emailPessoa)){

						echo "Email já cadastrado";
					}
				}
				else{

					echo "Preencha todos os campos";
				}
		}
	}

	?>

	<?php 

	if(isset($_GET['idUpdate'])){

		$idUpdate = addslashes($_GET['idUpdate']);
		$results = $p->buscarDadosPessoa($idUpdate);
	}

	 ?>
	<section id="esquerda">
		<form method="POST">
			<h2>Cadastrar Pessoa</h2>
			<label for="nome">Nome</label>
			<input type="text" name="nomePessoa" id="nomePessoa" 
			value="<?php 
			if(isset($results)){
				echo $results['nomePessoa'];
			}
			?>">
			<label for="telefone">Telefone</label>
			<input type="text" name="telefonePessoa" id="telefonePessoa" 
			value="<?php 
			if(isset($results)){
				echo $results['telefonePessoa'];
			}
			?>">
			<label for="email">Email</label>
			<input type="email" name="emailPessoa" id="emailPessoa" 
			value="<?php 
			if(isset($results)){
				echo $results['emailPessoa'];
			}
			?>">

			<input type="submit" value="
			<?php
				if(isset($results)){
					echo "Atualizar";
				}else{
					echo "Cadastrar";
				}
			?>">
		</form>
	</section>

	<section id="direita">
		<table>
			<tr id="titulo">
				<td>Nome</td>
				<td>Telefone</td>
				<td colspan="2">Email</td>
			</tr>

				<?php

					$dados = $p->buscarDados();

					if(count($dados)>0){

						

						for ($i=0; $i < count($dados); $i++) {

							echo "<tr>";
							foreach ($dados[$i] as $k => $v) {
								
								if ($k != "idPessoa") {
									
									echo "<td>". $v. "</td>";
								}
							}

				?>				
							<td>
								<a href="index.php?idUpdate=<?php echo $dados[$i]['idPessoa'];?>">Editar</a>
								<a href="index.php?idPessoa=<?php echo $dados[$i]['idPessoa'];?>">Excluir</a>
								
							</td>
							</tr>
				<?php 		
						}
					}
					else{
						echo "Ainda não há pessoas cadastradas";
					}
				?>	
				
		</table>
	</section>

</body>
</html>

<?php 
	
	if(isset($_GET['idPessoa'])){

		$id_pessoa = addslashes($_GET['idPessoa']);
		$p->excluirPessoa($id_pessoa);
		header("location: index.php");
	}

 ?>
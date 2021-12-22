<?php 

	require_once("config.php");

	$a = new Animal();
?>

<!DOCTYPE html>

<html>
	<head>
		<title>Cadastro de Animais</title>
		<link rel="stylesheet" type="text/css" href="Estilos/css.css">
		<meta charset="utf-8">
	</head>

	<body>

		<?php 


		if(isset($_POST['nomeAnimal'])){

			if(isset($_GET['idUpdate']) && !empty($_GET['idUpdate'])){

				$idUpdate = addslashes($_GET['idUpdate']);

				$nomeAnimal = addslashes($_POST['nomeAnimal']);
				$dtNascimento = addslashes($_POST['dtNascimento']);
				$racaAnimal = addslashes($_POST['racaAnimal']);
				$nomeDono = addslashes($_POST['nomeDono']);

				if (!empty($nomeAnimal) && !empty($dtNascimento) && !empty($racaAnimal) && !empty($nomeDono)) {
					
					$a->atualizarDados($idUpdate, $nomeAnimal, $dtNascimento, $racaAnimal, $nomeDono);

					header("location: index.php");
				}
				
			}else{

				$nomeAnimal = addslashes($_POST['nomeAnimal']);
				$dtAnimal = addslashes($_POST['dtNascimento']);
				$racaAnimal = addslashes($_POST['racaAnimal']);
				$nomeDono = addslashes($_POST['nomeDono']);

				if(!empty($nomeAnimal) && !empty($dtAnimal) && !empty($racaAnimal) && !empty($nomeDono)){

					if(!$a->cadastraAnimal($nomeAnimal, $dtAnimal, $racaAnimal, $nomeDono)){

						echo "Usuário já cadastrado";
					}

				}else{

					echo "Preencha todos os campos";
				}
			}
		}

		 ?>


		 <?php 

		 	if(isset($_GET['idUpdate'])){

		 		$idUpdate = addslashes($_GET['idUpdate']);
		 		$results = $a->buscarDadosAnimal($idUpdate);
		 	}

		  ?>
		<section class="esquerdo">
			<form method="POST">
				<h2>Cadastro do Animal</h2>

				<label for="nomeAnimal">Nome</label>
				<input type="text" name="nomeAnimal" id="nomeAnimal" 
				value="<?php if(isset($results)){
						echo $results['nomeAnimal'];}?>">

				<label for="dtNascimento">Data de Nascimento</label>
				<input type="date" name="dtNascimento" id="dtNascimento" 
				value="<?php if(isset($results)){ echo $results['dtNascimento'];} ?>">

				<label for="racaAnimal">Raça</label>
				<input type="text" name="racaAnimal" id="racaAnimal" 
				value="<?php if(isset($results)){ echo $results['racaAnimal'];} ?>">
				
				<label for="nomeDono">Nome do Dono</label>
				<input type="text" name="nomeDono" id="nomeDono" 
				value="<?php if(isset($results)){ echo $results['nomeDono'];} ?>">

				<input type="submit" name="cadastrar" 
				value="<?php 
					if(isset($results)){
						echo "Atualizar";
					}else{
						echo "Cadastrar";
					}

				 ?>">
			</form>
			
		</section>

		<section class="direito">
			<table>
				<tr id="titulo">
					<td>Nome</td>
					<td>Data de Nascimento</td>
					<td>Raça</td>
					<td>Dono(a)</td>
					<td>Data de Cadastro</td>
					<td colspan="2"></td>
				</tr>

				<?php 

					$dados = $a->buscarDados();

					if(count($dados)>0){

						//Percorre a minha primeira posição da matriz que vem do banco de dados

						for ($i = 0; $i<count($dados); $i++) { 

							echo "<tr>";

							//Percorre a minha segunda posição da matriz que vem do banco de dados (que é outro array)

								foreach ($dados[$i] as $k => $v) {
									
									//Para não mostrar o campo id na tela
									if($k != 'idAnimal'){

										if($k == 'dtNascimento'){

											echo"<td>". $a->formataData($v). "</td>";		
										}

										else if($k == 'dtCadastro'){

											echo"<td>". $a->formataDataHora($v). "</td>";
										}

										else{
											echo"<td>". $v. "</td>";
										}
										
										
				
									}
								}

				?>
									<td><a href="index.php?idAnimal=<?php
										echo $dados[$i]['idAnimal'];
									?>">Excluir</a>
										<a href="index.php?idUpdate=<?php
										echo $dados[$i]['idAnimal'];
										?>">Editar</a>
									</td>
				<?php
							}
					}else{

						echo "Sem dados cadastrados";
					}

				?>
			</tr>

			</table>
		</section>

	</body>
</html>

<?php 

	if(isset($_GET['idAnimal'])){

		$idAnimal = addslashes($_GET['idAnimal']);
		$a->excluirAnimal($idAnimal);

		header('location:index.php');
	}

 ?>
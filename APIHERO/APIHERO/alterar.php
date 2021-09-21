<?php 
	require_once 'conexao/conexao.php';
	//cabeçalho
	include_once 'includes/header.php';

	if (isset($_GET['id'])) {

		$id = mysqli_escape_string($connection, $_GET['id']);

		$sql = "SELECT * FROM tbherois WHERE codPro = '$id'";

		$resultado = mysqli_query($connection,$sql);

		$dados = mysqli_fetch_array($resultado);



	}

?>
	<div class="row">
		<div class="col s12 m6 push-m3">
			
			<h3 class="light">Alterar Herói</h3>
			
			<form action="conexao/alterar_heroi.php" method="POST">

				<input type="hidden" name = "codPro" value="<?php echo $dados['codPro']; ?>">
				
				<div class="input-field col s12">
					<input type="text" name="nomePro" id="nomePro" value="<?php echo $dados['nomePro']; ?>">
					<label for="nome">Nome do Heroi</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="categoriaPro" id="categoriaPro" value="<?php echo $dados['categoriaPro']; ?>"
					>
					<label for="sobrenome">Nome real do heroi</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="marcaPro" id="marcaPro" value="<?php echo $dados['marcaPro']; ?>">
					<label for="email">Avaliação</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="precoPro" id="precoPro" value="<?php echo $dados['precoPro']; ?>">
					<label for="idade">Afiliação da equipe</label>
				</div>

				
				<button type="submit" name="btn-alterar" class="btn purple darken-4">Alterar</button>
				
				<a href="index.php" class="btn green">Lista de herois</a>

			</form>

		</div>		
	</div>


<?php 
	
	//rodapé

	include_once 'includes/footer.php';


 ?>
<?php
	$id_saga = $_GET['saga'];

	$query = "SELECT sagas FROM usuarios WHERE id_usuario='$id_usuario' && sagas LIKE '%$id_saga%'";
	$resultado = mysqli_query($conexao, $query);
	$linha_own = mysqli_fetch_array($resultado);

	$query_saga = "	SELECT nome, desenvolvedor, ano, tipo, categoria, sinopse, img FROM sagas
					WHERE (id_saga='$id_saga')";
	$resultado_saga = mysqli_query($conexao, $query_saga);
	$linha_saga = mysqli_fetch_array($resultado_saga);

	$query_temporada = "SELECT id_temporada, nome, ano, total_episodios, img FROM temporadas
						WHERE (id_saga='$id_saga')
						ORDER BY ano ASC";
	$resultado_temporada = mysqli_query($conexao, $query_temporada);

	// Atualização de Episódios
	if(isset($_POST['epModal']))
	{
		require_once("lib/Episodio.php");

		$episodio = new Episodio;
		$episodio->postEpisodio($id_usuario, $id_saga, $_POST['idTemporada'], $_POST['epModal'], '');
		$episodio->editEpisodio($conexao, $_POST['totalEpModal']);
	}
	// Adicionar Saga para Usuário
	if(isset($_GET['add'])) {
		$query = "SELECT sagas FROM usuarios WHERE id_usuario='$id_usuario'";
		$resultado = mysqli_query($conexao, $query);
		$linha = mysqli_fetch_array($resultado);
		$new_sagas = $linha['sagas'].','.$id_saga;

		$query = "UPDATE usuarios SET sagas = '$new_sagas' WHERE id_usuario='$id_usuario'";
		$resultado = mysqli_query($conexao, $query);
		header("location: ?saga=$id_saga");
	}
?>
	<!-- Título -->
	<div class="row">
		<div class="col-lg-12 col-sm-12">
			<div class="text-center" style="margin-bottom: 10px">
				<h1 class="display-4"><?php echo $linha_saga['nome']; ?></h1>
				<?php
				if($_SESSION['conectado'] && !$linha_own['sagas']) { ?>
					<a href="?saga=<?php echo $id_saga; ?>&add=1">
						<img src="img/icon/plus.png" alt="Adicionar" title="Adicionar">
					</a>
				<?php }
				else if($linha_own['sagas']) { ?>
					<img src="img/icon/ok.png" alt="Adicionado" title="Adicionado à Lista">
				<?php } ?>
			</div>
		</div>
	</div>
	<!-- Mensagem -->
	<div class="row">
		<div class="col-12">
			<div class="" id="mensagem"></div>
		</div>
	</div>
	<!-- Corpo -->
	<div class="row">
		<!-- Poster da Saga -->
		<div class="col-md-4 col-sm-12">
			<img src="img/<?php echo $linha_saga['tipo'].'/'.$linha_saga['img']; ?>" class="img-thumbnail img-fluid">
		</div>

		<!-- Informações da Saga -->
		<div class="col-md-8 col-sm-12">
			<!-- Informações Básicas -->
			<div class="row">
				<div class="col-12">
					<?php
					switch($linha_saga['tipo']) {
						case 'anime':
							echo '<p><strong>Estúdio: </strong>'.$linha_saga['desenvolvedor'].'</p>';
							break;
						case 'jogo':
							echo '<p><strong>Publicadora: </strong>'.$linha_saga['desenvolvedor'].'</p>';
							break;
						case 'livro':
							echo '<p><strong>Autor(a): </strong>'.$linha_saga['desenvolvedor'].'</p>';
							break;
						case 'serie':
							echo '<p><strong>Emissora: </strong>'.$linha_saga['desenvolvedor'].'</p>';
							break;
					} ?>
					<p><strong>Ano: </strong><?php echo $linha_saga['ano'] ?></p>
					<p><strong>Categoria: </strong><?php echo $linha_saga['categoria']; ?></p>
				</div>
			</div>
			<!-- Temporadas -->
			<div class="row">
			<?php
			while($linha_temporada = mysqli_fetch_array($resultado_temporada))
			{
				$id_temporada = $linha_temporada['id_temporada'];
				if(isset($_SESSION['conectado'])) {
					$query_episodio = "	SELECT valor, estado FROM episodios
										WHERE (id_saga='$id_saga') && (id_temporada='$id_temporada') && (id_usuario='$id_usuario')";
					$resultado_episodio = mysqli_query($conexao, $query_episodio);
					$linha_episodio = mysqli_fetch_array($resultado_episodio);
				} ?>
				<div class="col-6 col-md-3 col-sm-4">
					<!-- Card -->
					<div class="card text-center border border-0 text-dark">
						<img src="img/<?php echo $linha_saga['tipo'].'/'.$linha_temporada['img']; ?>" class="card-img-top" style="max-height: 200px" alt="<?php echo $linha_temporada['nome']; ?>">
						<div class="card-body p-1 card-info card-info-up">
							<p style="display: none"><?php echo $id_temporada; ?></p>
							<p><?php echo $linha_temporada['nome']; ?></p>
							<p style="display: none"><?php echo $linha_episodio['estado']; ?></p>

							<?php if($_SESSION['conectado'] && $linha_own['sagas']) { ?>
							<input type="image" src="img/icon/edit.png" onclick="collectInfo(this)" data-toggle="modal" data-target="#editar">
							<?php } ?>
							
						</div>
						<?php
						if(isset($linha_episodio)) {
							switch($linha_episodio['estado']) {
								case 'Concluído':
									echo '<div class="card-footer bg-success">';
									break;
								case 'Em Andamento':
									echo '<div class="card-footer bg-warning">';
									break;
								default:
									echo '<div class="card-footer bg-danger">';
									break;
							}
						}
						else {
							echo '<div class="card-footer bg-danger">';
						}
						if(isset($_SESSION['conectado'])) {
							echo '<span id="ep">'.$linha_episodio['valor'].'</span>';
						}
							echo ' / ';
							echo '<span id="total_ep">'.$linha_temporada['total_episodios'].'</span>'; ?>
						</div>
					</div>
				</div>
			<?php } ?>
			</div>
			<!-- Sinopse -->
			<div class="row">
				<div class="col-12">
					<p><strong>Sinopse: </strong></p>
					<p class="text-justify"><?php echo nl2br($linha_saga['sinopse']); ?></p>
				</div>
			</div>
		</div>

		<?php
			include("etc/modal_edit.php");
		?>

	</div>
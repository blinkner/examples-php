<?php $add = $_GET['add']; ?>
<section>
	<div class="container">
		<!-- Título -->
		<div class="row">
			<div class="col-lg-12 col-sm-12">
				<div class="text-center" style="margin-bottom: 10px">
					<h1 class="display-4">Cadastro de <?php echo $add; ?></h1>
				</div>
			</div>
		</div>
		<?php
			if($add == 'saga') {
				require_once('lib/Saga.php');

				$addSaga = new Saga;

				if(isset($_POST['nome'])) {
					$addSaga->postSaga($_POST['nome'], $_POST['desenvolvedor'], $_POST['ano'], $_POST['tipo'], $_POST['categoria'], $_POST['sinopse'], $_POST['img']);
					$addSaga->cadastrar($conexao);
				}
		?>
				<div class="row">
					<div class="col-12">
						<form action="?i=cadastro&add=saga" method="post">
							<div class="row">
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="nome">Nome:</label>
										<input type="text" id="nome" name="nome" class="form-control" value="<?php echo $addSaga->nome; ?>">
									</div>
								</div>

								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="desenvolvedor">Desenvolvedor:</label>
										<input type="text" id="desenvolvedor" name="desenvolvedor" class="form-control" value="<?php echo $addSaga->desenvolvedor; ?>">
									</div>
								</div>

								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="ano">Ano:</label>
										<input type="text" id="ano" name="ano" class="form-control" value="<?php echo $addSaga->ano; ?>">
									</div>
								</div>
							</div>

							<div class="form-group">
								<label for="tipo">Tipo:</label>
								<select name="tipo" id="tipo" class="form-control">
									<option value="anime">Anime</option>
									<option value="jogo">Jogo</option>
									<option value="livro">Livro</option>
									<option value="serie">Série</option>
								</select>
							</div>

							<div class="form-group">
								<label for="categoria">Categoria:</label>
								<input type="text" id="categoria" name="categoria" class="form-control" value="<?php echo $addSaga->categoria; ?>">
							</div>

							<div class="form-group">
								<label for="sinopse">Sinopse:</label>
								<textarea id="sinopse" name="sinopse" class="form-control"><?php echo $addSaga->sinopse; ?></textarea>
							</div>

							<div class="form-group">
								<label for="img">IMG:</label>
								<input type="text" id="img" name="img" class="form-control" value="<?php echo $addSaga->img; ?>">
							</div>

							<input type="submit" name="enviar" class="btn btn-secondary btn-block" value="Enviar">
						</form>
					</div>
				</div>	
			<?php }

			if($add == 'temporada') {
				require_once('lib/Temporada.php');

				$addTemporada = new Temporada;
				
				$query_pesquisa = "SELECT id_saga, nome FROM sagas ORDER BY nome ASC";
				$resultado_pesquisa = mysqli_query($conexao, $query_pesquisa);

				if(isset($_POST['nome'])) {
					$addTemporada->postTemporada($_POST['id_saga'], $_POST['nome'], $_POST['ano'], $_POST['total_episodios'], $_POST['img']);
					$addTemporada->cadastrar($conexao);
				} ?>
				<div class="row">
					<div class="col-12">
						<form action="?i=cadastro&add=temporada" method="post">
							<div class="form-group">
								<label for="id_saga">Saga:</label>
								<select name="id_saga" id="id_saga" class="form-control">
								<?php while($linha = mysqli_fetch_array($resultado_pesquisa))
								{ ?>
									<option value="<?php echo $linha['id_saga']; ?>">
										<?php echo $linha['nome']; ?>
									</option>
								<?php } ?>
								</select>
							</div>

							<div class="form-group">
								<label for="nome">Nome:</label>
								<input type="text" id="nome" name="nome" value="<?php echo $addTemporada->nome; ?>" class="form-control">
							</div>

							<div class="row">
								<div class="col-6">
									<div class="form-group">
										<label for="ano">Ano:</label>
									<input type="text" id="ano" name="ano" value="<?php echo $addTemporada->ano; ?>" class="form-control">
									</div>
								</div>

								<div class="col-6">
									<div class="form-group">
										<label for="total_episodios">Total de episódios:</label>
									<input type="number" id="total_episodios" name="total_episodios" value="<?php echo $addTemporada->total_episodios; ?>" class="form-control">
									</div>
								</div>
							</div>

							<div class="form-group">
								<label for="img">IMG:</label>
							<input type="text" id="img" name="img" value="<?php echo $addTemporada->img; ?>" class="form-control">
							</div>

							<input type="submit" name="enviar" class="btn btn-secondary btn-block" value="Enviar">
						</form>
					</div>
				</div>
			<?php } ?>
	</div>
</section>
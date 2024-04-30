<?php
	// Importa o Cabeçalho
	include("header.php");
?>
		
		<section>
			<div class="linha">
				<?php
					// Importa a Barra Lateral
					include("sidebar.php");

					$id_produto = $_GET['id_produto'];

					$query = "SELECT * FROM produtos WHERE id_produto='$id_produto'";
					$resultado = mysql_query($query,$conexao);
					$linha = mysql_fetch_array($resultado);

					$atual_episode = $linha['atual_episode'];
					$estado = $linha['estado'];
					$atual_filme = $linha['atual_filme'];
					$atual_season = $linha['atual_season'];

					if (isset($_POST['estado']))
					{
						$atual_episode = $_POST['atual_episode'];
						$estado = $_POST['estado'];
						$atual_filme = $_POST['atual_filme'];
						$atual_season = $_POST['atual_season'];

						if ($estado)
						{
							$query = "	UPDATE produtos
										SET atual_episode='$atual_episode', estado='$estado', atual_filme='$atual_filme',
										atual_season='$atual_season'
										WHERE id_produto='$id_produto'";
							$resultado = mysql_query($query, $conexao);

							echo "<script>
									location.href = 'produto.php?id_produto=".$id_produto."';
								</script>";
						}
						else
						{
							echo "<script>alert('Atenção, há algo de errado!');</script>";
						}
					}
				?>
				<div class="coluna col10 titulo">
					<!-- Título -->
					<h2><?php echo $linha['nome']; ?></h2>
				</div>
				<div class="coluna col10 produto">
					<!-- Produto -->
					<?php
						if ($linha['tag'] == "anime")
						{
					?>
						<form action="editar.php?id_produto=<?php echo $id_produto; ?>" method="post">
							<img src="<?php echo $linha['img']; ?>" class="poster" />
							<p>
								<label class="rotulo">Nome:</label> <?php echo $linha['nome']; ?><br />
								<label class="rotulo">Autor(a):</label> <?php echo $linha['autor']; ?><br />
								<label class="rotulo">Ano:</label> <?php echo $linha['ano']; ?><br />
								<label class="rotulo">Categoria:</label> <?php echo $linha['categoria']; ?><br />
								<label class="rotulo" for="atual_episode">Episódio:</label>
									<input type="number" name="atual_episode" id="atual_episode" class="editar" min="0" max="<?php echo $linha['all_episodes']; ?>" value="<?php echo $atual_episode; ?>">
										 / <strong><?php echo $linha['all_episodes']; ?></strong><br />
								<label class="rotulo" for="estado">Estado:</label>
									<select name="estado" id="estado" class="editar">
										<option value="Andamento" <?php if($estado == "Andamento"){echo "selected";} ?>>Andamento</option>
										<option value="Espera" <?php if($estado == "Espera"){echo "selected";} ?>>Espera</option>
										<option value="Finalizado" <?php if($estado == "Finalizado"){echo "selected";} ?>>Finalizado</option>
									</select>
								<input type="image" src="img/icons/salvar.png" title="Salvar"><br />
								<label class="rotulo" for="atual_filme">Filmes:</label>
									<input type="number" name="atual_filme" id="atual_filme" class="editar" min="0" max="<?php echo $linha['all_filmes']; ?>" value="<?php echo $atual_filme; ?>">
										 / <strong><?php echo $linha['all_filmes']; ?></strong>
									<img src="img/icons/info.png" title="Informações" class="imgBtn" onclick="document.getElementById('info').style.display='block'" /><br />
							</p>
							<p>
								<label class="rotulo">Sinopse:</label>
								<?php echo nl2br($linha['sinopse']); ?>
							</p>

							<div id="info">
								<span onclick="document.getElementById('info').style.display='none'" class="close">&times;</span>
								<p>
									<?php echo nl2br($linha['elenco']); ?>
								</p>
							</div>

							<!-- Inputs Escondidos -->
							<input type="hidden" name="atual_season" id="atual_season" value="<?php echo $atual_season; ?>">
						</form>
					<?php
						}
						else if ($linha['tag'] == "jogo")
						{
					?>
						<form action="editar.php?id_produto=<?php echo $id_produto; ?>" method="post">
							<img src="<?php echo $linha['img']; ?>" class="poster" />
							<p>
								<label class="rotulo">Nome:</label> <?php echo $linha['nome']; ?><br />
								<label class="rotulo">Publicadora(s):</label> <?php echo $linha['autor']; ?><br />
								<label class="rotulo">Ano:</label> <?php echo $linha['ano']; ?><br />
								<label class="rotulo">Categoria:</label> <?php echo $linha['categoria']; ?><br />
								<label class="rotulo" for="estado">Estado:</label>
									<select name="estado" id="estado" class="editar">
										<option value="Andamento" <?php if($estado == "Andamento"){echo "selected";} ?>>Andamento</option>
										<option value="Espera" <?php if($estado == "Espera"){echo "selected";} ?>>Espera</option>
										<option value="Finalizado" <?php if($estado == "Finalizado"){echo "selected";} ?>>Finalizado</option>
									</select>
								<input type="image" src="img/icons/salvar.png" title="Salvar"><br />
							</p>
							<p>
								<label class="rotulo">Sinopse:</label>
								<?php echo nl2br($linha['sinopse']); ?>
							</p>
							<!-- Inputs Escondidos -->
							<input type="hidden" name="atual_episode" id="atual_episode" value="<?php echo $atual_episode; ?>">
							<input type="hidden" name="atual_filme" id="atual_filme" value="<?php echo $atual_filme; ?>">
							<input type="hidden" name="atual_season" id="atual_season" value="<?php echo $atual_season; ?>">
						</form>
					<?php
						}
						else if ($linha['tag'] == "livro")
						{
					?>
						<form action="editar.php?id_produto=<?php echo $id_produto; ?>" method="post">
							<img src="<?php echo $linha['img']; ?>" class="poster" />
							<p>
								<label class="rotulo">Nome:</label> <?php echo $linha['nome']; ?><br />
								<label class="rotulo">Autor(a):</label> <?php echo $linha['autor']; ?><br />
								<label class="rotulo">Ano:</label> <?php echo $linha['ano']; ?><br />
								<label class="rotulo">Categoria:</label> <?php echo $linha['categoria']; ?><br />
								<label class="rotulo" for="estado">Estado:</label>
									<select name="estado" id="estado" class="editar">
										<option value="Andamento" <?php if($estado == "Andamento"){echo "selected";} ?>>Andamento</option>
										<option value="Espera" <?php if($estado == "Espera"){echo "selected";} ?>>Espera</option>
										<option value="Finalizado" <?php if($estado == "Finalizado"){echo "selected";} ?>>Finalizado</option>
									</select>
								<input type="image" src="img/icons/salvar.png" title="Salvar"><br />
							</p>
							<p>
								<label class="rotulo">Sinopse:</label>
								<?php echo nl2br($linha['sinopse']); ?>
							</p>
							<!-- Inputs Escondidos -->
							<input type="hidden" name="atual_episode" id="atual_episode" value="<?php echo $atual_episode; ?>">
							<input type="hidden" name="atual_filme" id="atual_filme" value="<?php echo $atual_filme; ?>">
							<input type="hidden" name="atual_season" id="atual_season" value="<?php echo $atual_season; ?>">
						</form>
					<?php
						}
						else if ($linha['tag'] == "novela")
						{
					?>
						<form action="editar.php?id_produto=<?php echo $id_produto; ?>" method="post">
							<img src="<?php echo $linha['img']; ?>" class="poster" />
							<p>
								<label class="rotulo">Nome:</label> <?php echo $linha['nome']; ?><br />
								<label class="rotulo">Diretor(a):</label> <?php echo $linha['autor']; ?><br />
								<label class="rotulo">Ano:</label> <?php echo $linha['ano']; ?><br />
								<label class="rotulo">Categoria:</label>  <?php echo $linha['categoria']; ?><br />
								<label class="rotulo" for="atual_episode">Capítulo:</label>
									<input type="number" name="atual_episode" id="atual_episode" class="editar" min="0" max="<?php echo $linha['all_episodes']; ?>" value="<?php echo $atual_episode; ?>">
										 / <strong><?php echo $linha['all_episodes']; ?></strong><br />
								<label class="rotulo" for="estado">Estado:</label>
									<select name="estado" id="estado" class="editar">
										<option value="Andamento" <?php if($estado == "Andamento"){echo "selected";} ?>>Andamento</option>
										<option value="Espera" <?php if($estado == "Espera"){echo "selected";} ?>>Espera</option>
										<option value="Finalizado" <?php if($estado == "Finalizado"){echo "selected";} ?>>Finalizado</option>
									</select>
								<input type="image" src="img/icons/salvar.png" title="Salvar"><br />
							</p>
							<p>
								<label class="rotulo">Sinopse:</label>
								<?php echo nl2br($linha['sinopse']); ?>
							</p>
							<!-- Inputs Escondidos -->
							<input type="hidden" name="atual_filme" id="atual_filme" value="<?php echo $atual_filme; ?>">
							<input type="hidden" name="atual_season" id="atual_season" value="<?php echo $atual_season; ?>">
						</form>
					<?php
						}
						else if ($linha['tag'] == "série")
						{
							preg_match_all("/(\n)/", $linha['elenco'], $matches);
    						$total_lines = count($matches[0]) + 1;
					?>
						<form action="editar.php?id_produto=<?php echo $id_produto; ?>" method="post">
							<img src="<?php echo $linha['img']; ?>" class="poster" />
							<p>
								<label class="rotulo">Nome:</label> <?php echo $linha['nome']; ?><br />
								<label class="rotulo">Diretor(a):</label> <?php echo $linha['autor']; ?><br />
								<label class="rotulo">Ano:</label> <?php echo $linha['ano']; ?><br />
								<label class="rotulo">Categoria:</label> <?php echo $linha['categoria']; ?><br />
								<label class="rotulo">Episódio:</label>
									<input type="number" name="atual_season" id="atual_season" class="editar" min="0" max="<?php echo $total_lines; ?>" value="<?php echo $atual_season; ?>"> ª Temporada, 
									Episódio <input type="number" name="atual_episode" id="atual_episode" class="editar" min="0" max="23" value="<?php echo $atual_episode; ?>">
									<img src="img/icons/info.png" title="Informações" class="imgBtn" onclick="document.getElementById('info').style.display='block'" /><br />
								<label class="rotulo" for="estado">Estado:</label>
									<select name="estado" id="estado" class="editar">
										<option value="Andamento" <?php if($estado == "Andamento"){echo "selected";} ?>>Andamento</option>
										<option value="Espera" <?php if($estado == "Espera"){echo "selected";} ?>>Espera</option>
										<option value="Finalizado" <?php if($estado == "Finalizado"){echo "selected";} ?>>Finalizado</option>
									</select>
								<input type="image" src="img/icons/salvar.png" title="Salvar"><br />
							</p>
							<p>
								<label class="rotulo">Sinopse:</label>
								<?php echo nl2br($linha['sinopse']); ?>
							</p>

							<div id="info">
								<span onclick="document.getElementById('info').style.display='none'" class="close">&times;</span>
								<p>
									<?php echo nl2br($linha['elenco']); ?>
								</p>
							</div>

							<!-- Inputs Escondidos -->
							<input type="hidden" name="atual_filme" id="atual_filme" value="<?php echo $atual_filme; ?>">
						</form>
					<?php
						}
					?>
				</div>
			</div>
		</section>
		
<?php
	// Importa o Rodapé
	include("footer.php");
?>
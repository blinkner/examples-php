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
						<img src="<?php echo $linha['img']; ?>" class="poster" />
						<p>
							<label class="rotulo">Nome:</label> <?php echo $linha['nome']; ?><br />
							<label class="rotulo">Autor(a):</label> <?php echo $linha['autor']; ?><br />
							<label class="rotulo">Ano:</label> <?php echo $linha['ano']; ?><br />
							<label class="rotulo">Categoria:</label> <?php echo $linha['categoria']; ?><br />
							<label class="rotulo">Episódio:</label> <?php echo $linha['atual_episode']; ?> / <strong><?php echo $linha['all_episodes']; ?></strong><br />
							<label class="rotulo">Estado:</label> <?php echo $linha['estado']; ?>
							<a href="editar.php?id_produto=<?php echo $linha['id_produto']; ?>"><img src="img/icons/adicionar.png" title="Editar" class="imgBtn" id="editar" /></a><br />
							<label class="rotulo">Filmes:</label> <?php echo $linha['atual_filme']; ?> / <strong><?php echo $linha['all_filmes']; ?></strong>
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

					<?php
						}
						else if ($linha['tag'] == "jogo")
						{
					?>
						<img src="<?php echo $linha['img']; ?>" class="poster" />
						<p>
							<label class="rotulo">Nome:</label> <?php echo $linha['nome']; ?><br />
							<label class="rotulo">Publicadora(s):</label> <?php echo $linha['autor']; ?><br />
							<label class="rotulo">Ano:</label> <?php echo $linha['ano']; ?><br />
							<label class="rotulo">Categoria:</label> <?php echo $linha['categoria']; ?><br />
							<label class="rotulo">Estado:</label> <?php echo $linha['estado']; ?>
							<a href="editar.php?id_produto=<?php echo $linha['id_produto']; ?>"><img src="img/icons/adicionar.png" title="Editar" class="imgBtn" id="editar" /></a><br />
						</p>
						<p>
							<label class="rotulo">Sinopse:</label>
							<?php echo nl2br($linha['sinopse']); ?>
						</p>
					<?php
						}
						else if ($linha['tag'] == "livro")
						{
					?>
						<img src="<?php echo $linha['img']; ?>" class="poster" />
						<p>
							<label class="rotulo">Nome:</label> <?php echo $linha['nome']; ?><br />
							<label class="rotulo">Autor(a):</label> <?php echo $linha['autor']; ?><br />
							<label class="rotulo">Ano:</label> <?php echo $linha['ano']; ?><br />
							<label class="rotulo">Categoria:</label> <?php echo $linha['categoria']; ?><br />
							<label class="rotulo">Estado:</label> <?php echo $linha['estado']; ?>
							<a href="editar.php?id_produto=<?php echo $linha['id_produto']; ?>"><img src="img/icons/adicionar.png" title="Editar" class="imgBtn" id="editar" /></a><br />
						</p>
						<p>
							<label class="rotulo">Sinopse:</label>
							<?php echo nl2br($linha['sinopse']); ?>
						</p>
					<?php
						}
						else if ($linha['tag'] == "novela")
						{
					?>
						<img src="<?php echo $linha['img']; ?>" class="poster" />
						<p>
							<label class="rotulo">Nome:</label> <?php echo $linha['nome']; ?><br />
							<label class="rotulo">Diretor(a):</label> <?php echo $linha['autor']; ?><br />
							<label class="rotulo">Ano:</label> <?php echo $linha['ano']; ?><br />
							<label class="rotulo">Categoria:</label>  <?php echo $linha['categoria']; ?><br />
							<label class="rotulo">Capítulo:</label> <?php echo $linha['atual_episode']; ?>  / <strong><?php echo $linha['all_episodes']; ?></strong><br />
							<label class="rotulo">Estado:</label> <?php echo $linha['estado']; ?>
							<a href="editar.php?id_produto=<?php echo $linha['id_produto']; ?>"><img src="img/icons/adicionar.png" title="Editar" class="imgBtn" id="editar" /></a><br />
						</p>
						<p>
							<label class="rotulo">Sinopse:</label>
							<?php echo nl2br($linha['sinopse']); ?>
						</p>
					<?php
						}
						else if ($linha['tag'] == "série")
						{
					?>
						<img src="<?php echo $linha['img']; ?>" class="poster" />
						<p>
							<label class="rotulo">Nome:</label> <?php echo $linha['nome']; ?><br />
							<label class="rotulo">Diretor(a):</label> <?php echo $linha['autor']; ?><br />
							<label class="rotulo">Ano:</label> <?php echo $linha['ano']; ?><br />
							<label class="rotulo">Categoria:</label> <?php echo $linha['categoria']; ?><br />
							<label class="rotulo">Episódio:</label> <strong><?php echo $linha['atual_season']; ?>ª</strong> Temporada, 
								Episódio <strong><?php echo $linha['atual_episode']; ?></strong>
								<img src="img/icons/info.png" title="Informações" class="imgBtn" onclick="document.getElementById('info').style.display='block'" /><br />
							<label class="rotulo">Estado:</label> <?php echo $linha['estado']; ?>
							<a href="editar.php?id_produto=<?php echo $linha['id_produto']; ?>"><img src="img/icons/adicionar.png" title="Editar" class="imgBtn" id="editar" /></a><br />
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
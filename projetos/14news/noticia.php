<?php
	include("header.php");
?>

		<div class="linha">
			<section>
				<div class="coluna col12">
					
					<?php
						$id_noticia = $_GET['id_noticia'];
						

						$query = "SELECT
						noticias.*,
						DATE_FORMAT(noticias.data,'%d/%m/%Y') AS data_format
						FROM noticias
						WHERE id_noticia='$id_noticia'";

						$resultado = mysql_query($query,$conexao);

						$linha = mysql_fetch_array($resultado);
					?>

						<h1><?php echo $linha['titulo']; ?></h1>
						<p class="data">Publicado em <?php echo $linha['data_format']; ?>.</p>
						<p><?php echo nl2br($linha['corpo']); ?></p>

						<?php
							if ($linha['imgs'] != NULL)
							{
						?>
							<h3>IMAGENS:</h3>
							<div class="imgs">
								<?php echo $linha['imgs']; ?>
							</div>

					<?php
							}
					?>

					<div class="cleaner"></div>

					<?php
						$back_query = "SELECT * FROM noticias WHERE id_noticia<'$id_noticia' ORDER BY id_noticia DESC";
						$back_resultado = mysql_query($back_query,$conexao);

						$back_linha = mysql_fetch_array($back_resultado);

						$id_back = $back_linha['id_noticia'];

						if ($id_back[0] != NULL)
						{
					?>
						<a href="noticia.php?id_noticia=<?php echo $id_back[0]; ?>"><img src="img/seta-esquerda.png" title="Página Anterior" class="arrow aleft" /></a>
					
					<?php
						}
						$next_query = "SELECT * FROM noticias WHERE id_noticia>'$id_noticia' ORDER BY id_noticia ASC";
						$next_resultado = mysql_query($next_query,$conexao);

						$next_linha = mysql_fetch_array($next_resultado);

						$id_next = $next_linha['id_noticia'];

						if ($id_next[0] != NULL)
						{
					?>
						<a href="noticia.php?id_noticia=<?php echo $id_next[0]; ?>"><img src="img/seta-direita.png" title="Próxima Página" class="arrow aright" /></a>
					<?php
						}
					?>
				</div>
			</section>
		</div>

<?php
	include("footer.php");
?>
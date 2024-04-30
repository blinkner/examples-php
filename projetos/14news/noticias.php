<?php
	include("header.php");
?>
		<div class="linha">
			<section>
				<div class="coluna col12">
					<h1>Últimas Noticias:</h1>
					<?php
						$query = "SELECT noticias.*,
						DATE_FORMAT(noticias.data,'%d/%m/%Y') AS data_format
						FROM noticias
						ORDER BY data_format ASC, id_noticia DESC";
						$resultado = mysql_query($query,$conexao);

						while ($linha = mysql_fetch_array($resultado))
						{
					?>
					<div class="news-bloco">
						<a href="noticia.php?id_noticia=<?php echo $linha['id_noticia']; ?>">
							<img src="<?php echo $linha['main_img']; ?>" />
							<span class="data"><?php echo $linha['data_format']; ?></span>
							<p><?php echo $linha['titulo']; ?></p>
						</a>
					</div>
					<?php
						}
					?>
				</div>
			</section>
		</div>

<?php
	include("footer.php")
?>
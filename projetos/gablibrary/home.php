<?php
	// Importa o Cabeçalho
	include("header.php");
?>

		<section>
			<div class="linha">
				<?php
					// Importa a Barra Lateral
					include("sidebar.php");

					$query = "	SELECT * FROM noticia
								ORDER BY id_noticia DESC";
					$resultado = mysql_query($query,$conexao);
					
					while ($linha = mysql_fetch_array($resultado))
					{
						echo "<div class='coluna col10 titulo'>";
							// Título
							echo "<h2>"; echo $linha['titulo']; echo "</h2>";
						echo "</div>";
						echo "<div class='coluna col10 produto'>";
							// Notícia
							if ($linha['img'])
							{
							echo "<img class='novidade' src='"; echo $linha['img']; echo "'>";
							}
							echo "<p>"; echo nl2br($linha['descricao']); echo "</p>";
						echo "</div>";
					}
				?>
			</div>
		</section>

<?php
	// Importa o Rodapé
	include("footer.php");
?>
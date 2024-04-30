<?php
	// Importa o Cabeçalho
	include("header.php");
?>
		
		<section>
			<div class="linha">
				<?php
					// Importa a Barra Lateral
					include("sidebar.php");

					$categoria = $_GET['categoria'];
					$query = "SELECT * FROM produtos WHERE categoria='$categoria' ORDER BY nome ASC";
					$resultado = mysql_query($query,$conexao);
				?>
				<div class="coluna col10 titulo">
					<!-- Título -->
					<h2><?php echo $categoria; ?></h2>
				</div>
				<div class="coluna col10 produto">
					<!-- Produtos -->
					<?php
						while ($linha = mysql_fetch_array($resultado))
						{
							echo "<div class='produto-grade'>";
								echo "<a href='produto.php?id_produto="; echo $linha['id_produto']; echo "'>";
									echo "<img title='"; echo $linha['nome']; echo "' class='img-grade' src='"; echo $linha['img']; echo "' />";
								echo "</a>";
							echo "</div>";
						}
					?>
				</div>
			</div>
		</section>
		
<?php
	// Importa o Rodapé
	include("footer.php");
?>
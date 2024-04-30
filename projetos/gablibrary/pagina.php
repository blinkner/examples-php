<?php
	// Importa o Cabeçalho
	include("header.php");
?>

		<section>
			<div class="linha">
				<?php
					// Importa a Barra Lateral
					include("sidebar.php");
					
					$tag = $_GET['tag'];
					$queryEstado = "SELECT * FROM produtos WHERE tag='$tag' GROUP BY estado ASC";
					$resultadoEstado = mysql_query($queryEstado,$conexao);
					while ($linhaEstado = mysql_fetch_array($resultadoEstado))
					{
						$estado = $linhaEstado['estado'];
				?>
				<div class="coluna col10 titulo">
					<!-- Título -->
					<h2>
						<?php
							switch($tag)
							{
								case "serie":
									if ($estado == "Finalizado") {
										echo "séries - Finalizada";
									}
									else
									{
										echo "séries - ".$estado;
									}
								break;

								case "novela":
									if ($estado == "Finalizado") {
										echo $tag."s - Finalizada";
									}
									else
									{
										echo $tag."s - ".$estado;
									}
								break;

								default:
									echo $tag."s - ".$estado;
								break;
							}
						?>
					</h2>
				</div>
				<div class="coluna col10 produto">
					<!-- Produtos -->
					<?php
						$query = "SELECT * FROM produtos WHERE tag='$tag' && estado='$estado' ORDER BY nome ASC";
						$resultado = mysql_query($query,$conexao);
						while ($linha = mysql_fetch_array($resultado))
						{
					?>
					<div class="produto-grade">
						<a href="produto.php?id_produto=<?php echo $linha['id_produto']; ?>">
							<img src="<?php echo $linha['img']; ?>" title="<?php echo $linha['nome']; ?>">
						</a>
					</div>
					<?php
						}
					?>
				</div>
				<?php
					}
				?>
			</div>
		</section>
	
<?php
	// Importa o Rodapé
	include("footer.php");
?>
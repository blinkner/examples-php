<?php
	include("header.php"); // Trazendo o Cabeçalho
?>		
			
		<div class="linha">
			<section>
			
				<?php
					include("sidebar.php"); // Trazendo a Barra Lateral
				?>
				
				<div class="coluna col10 serie">
					
						<?php
							// Automatizando a página de cada série.
							$nome=$_GET["nome"];
							// Fazendo uma consulta SQL e retornando os resultados em uma tabela HTML.
							
							$query = "SELECT * FROM series WHERE nome='$nome'";
							$resultado = mysql_query($query,$conexao);
							
								$linha = mysql_fetch_array($resultado)
								?>
								<h1><?php echo $linha['nome']; ?></h1>
								<img src="<?php echo $linha['img']; ?>" />
								<ul class="sem-marcador">
									<li><strong>Titulo:</strong> <?php echo $linha['nome']; ?></li>
									<li><strong>Diretor(a):</strong> <?php echo $linha['diretor']; ?></li>
									<li><strong>Ano:</strong> <?php echo $linha['ano']; ?></li>
									<li><strong>Categoria:</strong> <?php echo $linha['categoria'];?>, 
									<?php echo $linha['categoria2']; ?>
									</li>
									<li><strong>Preço:</strong> R$ <?php echo $linha['preco']; ?></li>
								</ul>
								<h4>Sinopse:</h4>
								<p><?php echo $linha['descricao']; ?></p>

				</div>
			</section>
		</div>
		
<?php
	include("footer.php"); // Trazendo o Rodapé
?>
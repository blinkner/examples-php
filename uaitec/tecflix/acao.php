<?php
	include("header.php");
?>		
			
		<div class="linha">
			<section>
			
				<?php
					include("sidebar.php");
				?>
				
				<div class="coluna col10">
					<table>
						<tr>
							<td>ID</td>
							<td>Poster</td>
							<td>Nome</td>
							<td>Descrição</td>
							<td>Ano</td>
							<td>Diretor(a)</td>
							<td>Preço</td>
						</tr>
						<?php
							// Fazendo uma consulta SQL e retornando os resultados em uma tabela HTML.
							
							$query = "SELECT * FROM series WHERE categoria='Ação' or categoria2='Ação'";
							$resultado = mysql_query($query,$conexao);
							
								while ($linha = mysql_fetch_array($resultado))
								{
								?>
								<tr>
									<td><?php echo $linha['id_series']; ?></td>
									<td><img src="<?php echo $linha['img']; ?>" /></td>
									<td><a href="serie.php?nome=<?php echo $linha['nome']?>"><?php echo $linha['nome']; ?></a></td>
									<td><p><?php echo substr($linha['descricao'],0,80); ?>...</p></td>
									<td><?php echo $linha['ano']; ?></td>
									<td><?php echo $linha['diretor']; ?></td>
									<td>R$ <?php echo $linha['preco']; ?></td>
								</tr>
								<?php
								}
							?>
					</table>
				</div>
			</section>
		</div>
		
<?php
	include("footer.php");
?>
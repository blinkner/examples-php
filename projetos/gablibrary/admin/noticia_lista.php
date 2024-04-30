<?php
	include('header.php');
?>
	<section>
		<div class="linha">
			<div class="coluna col12 titulo">
				<h2>Notícias</h2>
			</div>
			<div class="coluna col12 produto">
				<a href="noticia_cadastro.php"><button type="button" class="btnCadastro">Cadastrar Notícia</button></a>
				<table>
					<thead>
						<tr>
							<th>ID</td>
							<th>Título</td>
							<th>Opções</td>
						</tr>
					</thead>
					<tbody>
						<?php
							// Fazendo Delete
							if (isset($_GET['id_excluir']))
							{
								$id_noticia = $_GET['id_excluir'];
								
								$query = "	DELETE FROM noticia
											WHERE id_noticia='$id_noticia'";
											
								$resultado = mysql_query($query,$conexao);
							}
							
							$query = "SELECT * FROM noticia ORDER BY id_noticia DESC";
							$resultado = mysql_query($query,$conexao);
							
							while ($linha = mysql_fetch_array($resultado))
							{
						?>
						<tr>
							<td><?php echo $linha['id_noticia']; ?></td>
							<td><?php echo $linha['titulo']; ?></td>
							<td>
								<a href="noticia_atualiza.php?id_noticia=<?php echo $linha['id_noticia']; ?>"><button type="button" class="btnEdit">Editar</button></a>
								<a href="?id_excluir=<?php echo $linha['id_noticia']; ?>"><button type="button" class="btnDelete">Excluir</button></a>
							</td>
						</tr>
						<?php
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</section>	
<?php
	include('footer.php');
?>
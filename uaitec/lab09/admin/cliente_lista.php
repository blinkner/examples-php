<?php
	include("header.php");
?>

		<!-- Begin page content -->
		<div class="container">
			<div class="page-header">
				<h1>Clientes</h1>
			</div>
			
			<table class="table">
				<thead>
					<tr>
						<th>ID</td>
						<th>Nome</td>
						<th>URL</td>
						<th width="160">Opções</td>
					</tr>
				</thead>
				<tbody>
					<?php
							// Fazendo Delete
							
							if (isset($_GET["id_excluir"]))
							{
								$id_cliente = $_GET["id_excluir"];
								
								$query = "	DELETE FROM cliente
											WHERE id_cliente='$id_cliente'";
											
								$resultado = mysql_query($query,$conexao);
							}
							// Fazendo uma consulta SQL e retornando os resultados
							
							$query = "	SELECT * FROM cliente
										ORDER BY id_cliente DESC";
										
							$resultado = mysql_query($query,$conexao);
							
							while ($linha = mysql_fetch_array($resultado))
							{
						?>
						<tr>
							<td><?php echo $linha["id_cliente"]; ?></td>
								<td><?php echo $linha["nome"]; ?></td>
								<td><?php echo $linha["url"]; ?></td>
								<td width="160">
									<a href="cliente_atualiza.php?id_cliente=<?php echo $linha["id_cliente"]; ?>" class="btn btn-info btn-md" role="button">Editar</a>
									<a href="cliente_lista.php?id_excluir=<?php echo $linha["id_cliente"]; ?>" class="btn btn-danger btn-md" role="button">Excluir</a>
								</td>
						</tr>
						<?php
							}
						?>
				</tbody>
			</table>
			
			<a href="cliente_cadastro.php" class="btn btn-primary btn-md" role="button">Cadastrar Cliente</a>
			
		</div>

<?php
	include("footer.php");
?>
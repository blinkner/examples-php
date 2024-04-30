<?php
	// Importa o Cabeçalho
	include('header.php');
?>

	<section>
		<div class="linha">
			<div class="coluna col12 titulo">
				<!-- Título -->
				<h2>Produtos</h2>
			</div>
			
			<div class="coluna col12 produto">
				<!-- Botão de Cadastro -->
				<a href="produto_cadastro.php"><button type="button" class="btnCadastro">Cadastrar Produto</button></a>
			
				<!-- Área de Pesquisa -->
				<form action="produto_lista.php" method="get">
					<input type="search" id="s" name="s" placeholder="Pesquisar..." class="pesquisa" />
				</form>
			</div>
			<div class="coluna col12 produto">
			
				<!-- Tabela de Produtos -->
				<table>
					<thead>
						<tr>
							<th>ID</td>
							<th>Nome</td>
							<th>Estado</td>
							<th>Categoria</td>
							<th>Tag</td>
							<th>Opções</td>
						</tr>
					</thead>
					<tbody>
					<?php
						// Fazendo Delete
						if (isset($_GET["id_excluir"]))
						{
							$id_produto = $_GET["id_excluir"];
							
							$query = "	DELETE FROM produtos
										WHERE id_produto='$id_produto'";
						}
						// Fazendo Pesquisa
						else if (isset($_GET['s']))
						{
							$pesquisa = $_GET['s'];
							$query = "	SELECT * FROM produtos
										WHERE nome
											LIKE '%$pesquisa%'
										ORDER BY nome ASC";
						}
						// Fazendo Consulta
						else
						{
							$query = "	SELECT * FROM produtos
										ORDER BY id_produto DESC";
						}
						
						$resultado = mysql_query($query,$conexao);
						
						while ($linha = mysql_fetch_array($resultado))
						{
							echo "<tr>";
								echo "<td>"; echo $linha['id_produto']; echo "</td>";
								echo "<td>"; echo $linha['nome']; echo "</td>";
								echo "<td>"; echo $linha['estado']; echo "</td>";
								echo "<td>"; echo $linha['categoria']; echo "</td>";
								echo "<td style='text-transform: capitalize'>"; echo $linha['tag']; echo "</td>";

								echo "<td>";
									echo "<a href='produto_atualiza.php?id_produto="; echo $linha['id_produto']; echo "'><button type='button' class='btnEdit'>Editar</button></a>";
									echo "<a href='?id_excluir="; echo $linha['id_produto']; echo "'><button type='button' class='btnDelete'>Excluir</button></a>";
								echo "</td>";
							echo "</tr>";
						}
					?>
					</tbody>
				</table>
			</div>
		</div>
	</section>

<?php
	// Importa o Rodapé
	include('footer.php');
?>
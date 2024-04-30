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
					<tr>
						<td>1</td>
						<td>Concessionaria de Carros</td>
						<td>http://www.carros.com.br</td>
						<td width="160">
							<a href="#" class="btn btn-info btn-md" role="button">Editar</a>
							<a href="#" class="btn btn-danger btn-md" role="button">Excluir</a>
						</td>
					</tr>
					<tr>
						<td>2</td>
						<td>Concessionaria de Motos</td>
						<td>http://www.motos.com.br</td>
						<td width="160">
							<a href="#" class="btn btn-info btn-md" role="button">Editar</a>
							<a href="#" class="btn btn-danger btn-md" role="button">Excluir</a>
						</td>
					</tr>
				</tbody>
			</table>
			
			<a href="cliente_cadastro.php" class="btn btn-primary btn-md" role="button">Cadastrar Cliente</a>
			
		</div>

<?php
	include("footer.php");
?>
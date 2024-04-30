<?php
	include("header.php");
?>

		<!-- Begin page content -->
		<div class="container">
			<div class="page-header">
				<h1>Notícias</h1>
			</div>
			
			<table class="table">
				<thead>
					<tr>
						<th>ID</td>
						<th>Data</td>
						<th>Titulo</td>
						<th width="160">Opções</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>13/03/1987</td>
						<td>LGerken Desenvolvimento Web</td>
						<td width="160">
							<a href="#" class="btn btn-info btn-md" role="button">Editar</a>
							<a href="#" class="btn btn-danger btn-md" role="button">Excluir</a>
						</td>
					</tr>
				</tbody>
			</table>
			
			<a href="noticia_cadastro.php" class="btn btn-primary btn-md" role="button">Cadastrar Notícia</a>
			
		</div>

<?php
	include("footer.php");
?>
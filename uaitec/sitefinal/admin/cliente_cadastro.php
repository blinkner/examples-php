<?php
	include("header.php");
?>

		<!-- Begin page content -->
		<div class="container">
			<div class="page-header">
				<h1>Cadastrar Cliente</h1>
			</div>
			
			<form action="cliente_cadastro.php" method="post">
				<div class="form-group">
					<label for="nome">Nome</label>
					<input type="text" class="form-control" id="nome" placeholder="nome">
				</div>
				
				<div class="form-group">
					<label for="url">URL</label>
					<input type="text" class="form-control" id="url" name="url" placeholder="http://">
				</div>
				
				<button type="submit" class="btn btn-primary btn-md">Cadastrar Cliente</button>
			</form>
			
		</div>

<?php
	include("footer.php");
?>
<?php
	include("header.php");
?>

		<!-- Begin page content -->
		<div class="container">
			<div class="page-header">
				<h1>Cadastrar Notícia</h1>
			</div>
			
			<form action="noticia_cadastro.php" method="post">
				<div class="form-group">
					<label for="data">Data</label>
					<input type="text" class="form-control" id="data" name="data" placeholder="00/00/0000">
				</div>
				
				<div class="form-group">
					<label for="titulo">Título</label>
					<input type="text" class="form-control" id="titulo" name="" placeholder="Título">
				</div>
				
				<div class="form-group">
					<label for="descricao">Descrição</label>
					<textarea class="form-control" id="descricao" name="descricao" rows="10"></textarea>
				</div>
				
				<div class="form-group">
					<label for="img">URL Imagem</label>
					<input type="text" class="form-control" id="img" name="img" placeholder="http://">
				</div>
				
				<button type="submit" class="btn btn-primary btn-md">Cadastrar Notícia</button>
			</form>
			
		</div>

<?php
	include("footer.php");
?>
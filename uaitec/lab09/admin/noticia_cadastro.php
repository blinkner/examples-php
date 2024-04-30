<?php
	include("header.php");
?>

		<!-- Begin page content -->
		<div class="container">
			<div class="page-header">
				<h1>Cadastrar Notícia</h1>
			</div>
			<?php
				if (isset($_POST['data']))
				{
					$data = $_POST['data'];
					$data_trans=explode("/",$data);
					
					// $data_trans[0] = DIA
					// $data_trans[1] = MES
					// $data_trans[2] = ANO
					
				$data_conv = $data_trans[2]."-".$data_trans[1]."-".$data_trans[0];
					
					$titulo = $_POST['titulo'];
					$descricao = $_POST['descricao'];
					$img = $_POST['img'];
					
					if ($data and $titulo and $descricao and $img)
					{
						$query = "INSERT INTO noticia VALUES('','$data_conv','$titulo','$descricao','$img')";
						mysql_query($query,$conexao);
						
						$data = "";
						$titulo = "";
						$descricao = "";
						$img = "";
						
						echo "<script>alert('Cadastrado com sucesso!')</script>";
					}
					else
					{
						echo "<script>alert('Atenção, preencha todos os campos!')</script>";
					}
				}
			?>
			<form action="noticia_cadastro.php" method="post">
				<div class="form-group">
					<label for="data">Data</label>
					<input type="text" class="form-control" id="data" name="data" placeholder="00/00/0000">
				</div>
				
				<div class="form-group">
					<label for="titulo">Título</label>
					<input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título">
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
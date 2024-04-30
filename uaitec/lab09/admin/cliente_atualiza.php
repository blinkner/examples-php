<?php
	include("header.php");
?>

		<!-- Begin page content -->
		<div class="container">
			<div class="page-header">
				<h1>Cadastrar Cliente</h1>
			</div>
			
			<?php
			
				if (isset($_GET['id_cliente']))
				{
					$id_cliente = $_GET["id_cliente"];
					
					// Fazendo uma consulta SQL e retornando os resultados
					
					$query = "	SELECT *
								FROM cliente
								WHERE id_cliente='$id_cliente'";
								
					$resultado = mysql_query($query,$conexao);
					
					$linha = mysql_fetch_array($resultado);
					
					$nome=$linha['nome'];
					$url=$linha['url'];
				}
			
				if (isset($_POST['nome']))
				{
					
					$nome = $_POST['nome'];
					$url = $_POST['url'];
					
					if ($nome and $url)
					{
						$query = "	UPDATE cliente
									SET nome='$nome', url='$url'
									WHERE id_cliente='$id_cliente'";
									
						mysql_query($query,$conexao);
						
						$nome = "";
						$url = "";
						
						echo "<script>alert('Atualizado com sucesso!')</script>";
					}
					else
					{
						echo "<script>alert('Atenção, preencha todos os campos!')</script>";
					}
				}
			?>
			<form action="cliente_atualiza.php?id_cliente=<?php echo $id_cliente; ?>" method="post">
				<div class="form-group">
					<label for="nome">Nome</label>
					<input type="text" class="form-control" id="nome" name="nome" placeholder="nome" value="<?php echo $nome; ?>">
				</div>
				
				<div class="form-group">
					<label for="url">URL</label>
					<input type="text" class="form-control" id="url" name="url" placeholder="http://" value="<?php echo $url; ?>">
				</div>
				
				<button type="submit" class="btn btn-primary btn-md">Atualizar Cliente</button>
			</form>
			
		</div>

<?php
	include("footer.php");
?>
<?php
	include('header.php');
?>
	<div class="linha">
		<section>
			<div class="coluna col12 titulo">
				<h2>Atualizar Notícia</h2>
			</div>
			<div class="coluna col12 produto">
			
				<?php
					if (isset($_GET['id_noticia']))
					{
						$id_noticia = $_GET['id_noticia'];
						
						$query = "	SELECT * FROM noticia
									WHERE id_noticia='$id_noticia'";
						$resultado = mysql_query($query,$conexao);
						
						$linha = mysql_fetch_array($resultado);
						
						$titulo = $linha['titulo'];
						$img = $linha['img'];
						$descricao = $linha['descricao'];
					}
					if (isset($_POST['titulo']))
					{
						$titulo = $_POST['titulo'];
						$img = $_POST['img'];
						$descricao = $_POST['descricao'];
						
						if ($titulo and $descricao)
						{
							$query = "	UPDATE noticia
										SET titulo='$titulo', img='$img', descricao='$descricao'
										WHERE id_noticia='$id_noticia'";
							$resultado = mysql_query($query,$conexao);
							
							$titulo = "";
							$img = "";
							$descricao = "";
							
							echo "	<script>
										alert ('Notícia atualizada com sucesso!');
										location.href = 'noticia_lista.php';
									</script>";
						}
						else {
							echo "<script>alert ('Atenção, preencha os campos corretamente!');</script>";
						}
					}
				?>
			
				<form action="noticia_atualiza.php?id_noticia=<?php echo $id_noticia; ?>" method="post">
					
					<div class="area UmDeUm">
						<label for="titulo">Título</label>
						<input type="text" name="titulo" id="titulo" placeholder="Título" value="<?php echo $titulo; ?>">
					</div>
					
					<div class="area UmDeUm">
						<label for="img">IMG</label>
						<input type="text" name="img" id="img" placeholder="http://" value="<?php echo $img; ?>">
					</div>
					
					<div class="area UmDeUm">
						<label for="descricao">Descrição</label>
						<textarea name="descricao" id="descricao" rows="6"><?php echo $descricao; ?></textarea>
					</div>
					
					<div class="area">
						<button type="submit" class="login">Atualizar Produto</button>
					</div>
					
				</form>
			</div>
		</section>
	</div>
<?php
	include('footer.php');
?>
<?php
	include('header.php');
?>
	<div class="linha">
		<section>
			<div class="coluna col12 titulo">
				<h2>Cadastrar Notícia</h2>
			</div>
			<div class="coluna col12 produto">
				
				<?php
					$titulo = "";
					$img = "";
					$descricao = "";
					
					if (isset($_POST['titulo']))
					{
						$titulo = $_POST['titulo'];
						$img = "img/noticias/".$_POST['img'];
						$descricao = $_POST['descricao'];
						
						if ($titulo and $descricao) 
						{
							$query = "	INSERT INTO noticia
										VALUES('','$titulo','$img','$descricao')";
							$resultado = mysql_query($query,$conexao);
							
							$titulo = "";
							$img = "";
							$descricao = "";
							
							echo "	<script>
										alert ('Notícia cadastrada com sucesso!');
										location.href = 'noticia_lista.php';
									</script>";
						}
						else
						{
							echo "<script>alert ('Atenção, preencha os campos corretamente!');</script>";
						}
					}
				?>
			
				<form action="noticia_cadastro.php" method="post">
					
					<div class="area UmDeUm">
						<label for="titulo">Título</label>
						<input type="text" name="titulo" id="titulo" placeholder="Título" value="<?php echo $titulo; ?>">
					</div>
					
					<div class="area UmDeUm">
						<label for="img">IMG</label>
						<input type="file" name="img" id="img" value="<?php echo $img; ?>">
					</div>
					
					<div class="area UmDeUm">
						<label for="descricao">Descrição</label>
						<textarea name="descricao"  id="descricao" rows="6"><?php echo $descricao; ?></textarea>
					</div>
					
					<div class="area">
						<button type="submit" class="login">Cadastrar Notícia</button>
					</div>
					
				</form>
			</div>
		</section>
	</div>
<?php
	include('footer.php');
?>
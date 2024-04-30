<?php
	// Importa o Cabeçalho
	include("header.php");
?>
	<section>
		<div class="linha">
			<div class="coluna col12 titulo">
				<!-- Título -->
				<h2>Atualizar Produto</h2>
			</div>
			<div class="coluna col12 produto">
				<?php
					if(isset($_GET['id_produto']))
					{
						$id_produto = $_GET['id_produto'];
						
						$query = "	SELECT * FROM produtos
									WHERE id_produto='$id_produto'";
						$resultado = mysql_query($query,$conexao);
						
						$linha = mysql_fetch_array($resultado);
						
						$nome = $linha['nome'];
						$autor = $linha['autor'];
						$ano = $linha['ano'];
						$tag = $linha['tag'];
						$all_episodes = $linha['all_episodes'];
						$atual_episode = $linha['atual_episode'];
						$estado = $linha['estado'];
						$atual_filme = $linha['atual_filme'];
						$all_filmes = $linha['all_filmes'];
						$sinopse = $linha['sinopse'];
						$img = $linha['img'];
						$elenco = $linha['elenco'];
						$atual_season = $linha['atual_season'];
						$categoria = $linha['categoria'];
					}
					if(isset($_POST['nome']))
					{
						$nome = $_POST['nome'];
						$autor = $_POST['autor'];
						$ano = $_POST['ano'];
						$tag = $_POST['tag'];
						$all_episodes = $_POST['all_episodes'];
						$atual_episode = $_POST['atual_episode'];
						$estado = $_POST['estado'];
						$atual_filme = $_POST['atual_filme'];
						$all_filmes = $_POST['all_filmes'];
						$sinopse = $_POST['sinopse'];
						$img = $_POST['img'];
						$elenco = $_POST['elenco'];
						$atual_season = $_POST['atual_season'];
						$categoria = $_POST['categoria'];
						
						if ($nome and $autor and $tag and $sinopse and $img)
						{
							$query = "	UPDATE produtos
										SET nome='$nome', autor='$autor', ano='$ano', tag='$tag', all_episodes='$all_episodes',
										atual_episode='$atual_episode', estado='$estado', atual_filme='$atual_filme', all_filmes='$all_filmes',
										sinopse='$sinopse', img='$img', elenco='$elenco', atual_season='$atual_season', categoria='$categoria'
										WHERE id_produto='$id_produto'";
							$resultado = mysql_query($query,$conexao);
							
							$nome = "";
							$autor = "";
							$ano = "";
							$tag = "";
							$all_episodes = "";
							$atual_episode = "";
							$estado = "";
							$atual_filme = "";
							$all_filmes = "";
							$sinopse = "";
							$img = "";
							$elenco = "";
							$atual_season = "";
							$categoria = "";
							
							echo "<script>
									alert('Produto atualizado com sucesso!');
									location.href = 'produto_lista.php';
								</script>";
						}
						else
						{
							echo "<script>alert('Atenção, preencha os campos corretamente!');</script>";
						}
					}
				?>
					
				<form action="produto_atualiza.php?id_produto=<?php echo $id_produto; ?>" method="post">
				
					<div class="area UmDeUm">
						<label for="nome">Nome:</label>
						<input type="text" name="nome" id="nome" placeholder="Ex.: Dragon Ball" value="<?php echo $nome; ?>">
					</div>
					
					<div class="area UmDeTres">
						<label for="autor">Autor / Diretor:</label>
						<input type="text" name="autor" id="nome" placeholder="Autor" value="<?php echo $autor; ?>">
					</div>
					
					<div class="area UmDeTres">
						<label for="ano">Ano:</label>
						<input type="number" name="ano" id="ano" placeholder="Ex.: 2000" min="1850" max="2999" value="<?php echo $ano; ?>">
					</div>
					
					<div class="area UmDeTres">
						<label for="tag">Tag:</label>
						<select name="tag" id="tag">
							<option value="anime" <?php if($tag == "anime"){echo "selected";} ?>>Anime</option>
							<option value="jogo" <?php if($tag == "jogo"){echo "selected";} ?>>Jogo</option>
							<option value="livro" <?php if($tag == "livro"){echo "selected";} ?>>Livro</option>
							<option value="novela" <?php if($tag == "novela"){echo "selected";} ?>>Novela</option>
							<option value="série" <?php if($tag == "série"){echo "selected";} ?>>Série</option>
						</select>
					</div>
					
					<div class="area UmDeTres">
						<label for="atual_season">Temporada Atual:</label>
						<input type="number" name="atual_season" id="atual_season" placeholder="Temporada Atual" min="0" max="15" value="<?php echo $atual_season; ?>">
					</div>
					
					<div class="area UmDeTres">
						<label for="atual_episode">Episódio Atual:</label>
						<input type="number" name="atual_episode" id="atual_episode" placeholder="Episódio Atual" min="0" max="1000" value="<?php echo $atual_episode; ?>">
					</div>
					
					<div class="area UmDeTres">
						<label for="all_episodes">Total de Episódios:</label>
						<input type="number" name="all_episodes" id="all_episodes" placeholder="Total de Episódios" min="0" max="1000" value="<?php echo $all_episodes; ?>">
					</div>
					
					<div class="area UmDeDois">
						<label for="categoria">Categoria:</label>
						<input type="text" name="categoria" id="categoria" placeholder="Ex.: Aventura" value="<?php echo $categoria; ?>">
					</div>
					
					<div class="area UmDeDois">
						<label for="estado">Estado:</label>
						<input type="radio" name="estado" class="marker" id="estado" value="Espera" <?php if($estado == "Espera"){echo "checked";} ?>>Espera /  
						<input type="radio" name="estado" class="marker" id="estado" value="Andamento" <?php if($estado == "Andamento"){echo "checked";} ?>>Andamento / 
						<input type="radio" name="estado" class="marker" id="estado" value="Finalizado" <?php if($estado == "Finalizado"){echo "checked";} ?>>Finalizado
					</div>
					
					<div class="area UmDeDois">
						<label for="atual_filme">Filme Atual:</label>
						<input type="number" name="atual_filme" id="atual_filme" placeholder="Filme Atual" min="0" max="20" value="<?php echo $atual_filme; ?>">
					</div>
					
					<div class="area UmDeDois">
						<label for="all_filmes">Quantidade de Filmes:</label>
						<input type="number" name="all_filmes" id="all_filmes" placeholder="Quantidade de Filmes" min="0" max="30" value="<?php echo $all_filmes; ?>">
					</div>	
						
					<div class="area UmDeUm">
						<label>IMG:</label>
						<input type="text" name="img" id="img" placeholder="Ex.: produto.jpg" value="<?php echo $img; ?>">
					</div>
					
					<div class="area UmDeDois">
						<label for="sinopse">Sinopse:</label>
						<textarea name="sinopse" id="sinopse" rows="6"><?php echo $sinopse; ?></textarea>
					</div>
					
					<div class="area UmDeDois">
						<label for="elenco">Elenco:</label>
						<textarea name="elenco" id="elenco" rows="6"><?php echo $elenco; ?></textarea>
					</div>
					
					<div class="area">
						<button type="submit" class="login">Atualizar Produto</button>
					</div>
					
				</form>
			</div>
		</div>
	</section>
<?php
	// Importa o Rodapé
	include("footer.php");
?>
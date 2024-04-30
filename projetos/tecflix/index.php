<?php
	include("header.php"); // Trazendo o Cabeçalho
?>
		<div class="linha">
			<section>
			
				<?php
					include("sidebar.php"); // Trazendo a Barra Lateral
				?>
				
				<div class="coluna col10">
					<h1>Novidades</h1>
					<p>Confira o novo website criado para você que quer comprar uma de suas séries
					favoritas sem sair de casa. Encontre as mais assistidas em todo o mundo em apenas
					um clique e veja como é fácil e rápido se divertir com seus amigos e familiares.</p>
					<p>Possuindo um layout simples e leve, fazemos de tudo para lhe proporcionar uma ótima
					navegação, livre de anúncios e muito intuitíva, você não precisará procurar nada em algum
					concorrente.</p>
					<p>Em breve estaremos disponíveis responsivamente para smartphones, tablets e outras plataformas.
					Consulte os preços e faça já o seu pedido.</p>
					<p>Clique abaixo para acessar nossa lista de produtos:</p>
					<a href="produtos.php" class="botao">Conferir &raquo;</a>
					
					<h2>Contribua!</h2>
					<p>Indique uma série para que possamos aprimorar o site.</p>
					<?php
						$seunome = "";
						$serie = "";
						$comentario = "";
						
						if (isset($_POST["seunome"]))
						{
							// Configura as variáveis do método POST para virarem variáveis
							
							$seunome = $_POST['seunome'];
							$serie = $_POST['serie'];
							$comentario = $_POST['comentario'];
							
							if ($seunome and $serie) //Se os campos Nome e Série estiverem preenchidos
							{
								$query = "INSERT INTO contribua VALUES('','$seunome','$serie','$comentario')";
								
								mysql_query($query,$conexao);
								
								$seunome = "";
								$serie = "";
								$comentario = "";
								
								echo "<script>alert('Mensagem enviada com sucesso!')</script>";
							}
							else {	// Se não estiverem preenchidos
								echo "<script>alert('Preencha os campos de nome e série.')</script>";
							}
						}
					?>
					<form action="index.php" method="post">
						<label for="seunome">Seu nome:</label>
							<input type="text" name="seunome" id="seunome" value="<?php echo $seunome;?>" />
						<label for="serie">Série:</label>
							<input type="text" name="serie" id="serie" value="<?php echo $serie;?>" />
						<label for="comentario">Comentário:</label>
							<textarea name="comentario" id="comentario"><?php echo $comentario;?></textarea>
						<input type="submit" class="botao" name="enviar" value="Enviar &raquo;" />
					</form>
				</div>
			</section>
		</div>
		
<?php
	include("footer.php"); // Trazendo o Rodapé
?>
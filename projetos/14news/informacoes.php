<?php
	include("header.php");
?>
		<div class="linha">
			<section>
				<div class="coluna col12">
					<h1>E. E. Professor Zama Maciel</h1>

					<ul>
						<li>Rua Pref. Camundinho, 651</li>
						<li>Centro</li>
						<li><strong>Cidade:</strong> Patos de Minas, MG</li>
						<li><strong>CEP:</strong> 38700-194</li>
						<li><strong>Telefone:</strong> (34) 3821-2246</li>
						<li><strong>Email:</strong> escola.119024@educacao.mg.gov.br</li>
					</ul>

					<h3>Etapas de Ensino</h3>
					<ul>
						<li>Ensino Fundamental</li>
						<li>Ensino Médio</li>
					</ul>

					<h3>Infraestrutura</h3>
					<ul>
						<li>Alimentação escolar para os alunos</li>
						<li>Água filtrada</li>
						<li>Energia da rede pública</li>
						<li>Esgoto da rede pública</li>
						<li>Lixo destinado à coleta periódica</li>
						<li>Acesso à Internet</li>
						<li>Banda larga</li>
					</ul>

					<h3>Equipamentos</h3>
					<ul>
						<li>Computadores administrativos</li>
						<li>Computadores para alunos</li>
						<li>TV</li>
						<li>DVD</li>
						<li>Antena Parabólica</li>
						<li>Copiadora</li>
						<li>Impressora</li>
						<li>Aparelho de som</li>
						<li>Projetor multimídia (datashow)</li>
						<li>Fax</li>
						<li>Câmera fotográfica/filmadora</li>
					</ul>

					<div class="formulario">
						<h3>Colabore!</h3>
						<?php
						
							$nome = "";
							$mensagem = "";

							if (isset($_POST["nome"]))
							{

								// Configura as variáveis do método POST para virarem variáveis

								$nome = $_POST['nome'];
								$mensagem = $_POST['mensagem'];

								if ($nome and $mensagem)
								{
									$query = "INSERT INTO contato VALUES('','$nome','$mensagem')";
									mysql_query($query,$conexao);

									$nome = "";
									$mensagem = "";

									echo "<script>alert ('Mensagem enviada com sucesso!')</script>";
								}
								else
								{
									echo "<script>alert ('Atenção, preencha todos os campos!')</script>";
								}
							}
						?>
						<form action="informacoes.php" method="post">
							<label for="nome">Nome:</label>
							<input type="text" id="nome" name="nome" value="<?php echo $nome; ?>">
							<label for="mensagem">Mensagem:</label>
							<textarea id="mensagem" name="mensagem"><?php echo $mensagem; ?></textarea>
							<input type="submit" class="botao" value="Enviar Mensagem &raquo;">
						</form>
					</div>

				</div>
			</section>
		</div>

<?php
	include("footer.php");
?>
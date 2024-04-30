<!DOCTYPE html>
<html>
	<head>
		<title>Gablibrary - Início</title>
		<link type="text/css" rel="stylesheet" href="css/normalize.css" />
		<link type="text/css" rel="stylesheet" href="css/estilo.css" />
		<link rel="shortcut icon" href="img/icon.png" />
		<meta charset="utf-8" />
		<?php
			include("lib/conexao.php");
			session_start();
			$erro_login = "";

			if (isset($_POST['login']))
			{
				$login = $_POST['login'];
				$senha = $_POST['senha'];

				$queryLogin = "	SELECT * FROM usuario
								WHERE (login='$login') && (senha='$senha')";
				$resultadoLogin = mysql_query($queryLogin,$conexao);

				$num_linhas = mysql_num_rows($resultadoLogin);

				if ($num_linhas > 0)
				{
					$_SESSION['conectado'] = true;
					$_SESSION['usuario'] = $login;

					header("location: home.php");
				}
				else
				{
					$_SESSION['conectado'] = false;

					$erro_login = "<script>alert('Login ou Senha inválidos!');</script>";
				}
			}
			if (isset($_GET['sair']))
			{
				$_SESSION['conectado'] = false;
			}
			if (isset($_SESSION['conectado']) and $_SESSION['conectado'])
			{
				header("location: home.php");
			}	
		?>
	</head>

	<body>
		<header>
			<div class="linha">
				<div class="coluna col6 topo">
					<?php echo $erro_login; ?>
				</div>
				<div class="coluna col6 topo right" id="topo">
					<!-- Campo de Login -->
					<form action="index.php" method="post">
						<input type="text" name="login" id="login" placeholder="Login" class="iptBasic" required />
						<input type="password" name="senha" id="senha" placeholder="Senha" class="iptBasic" required />
						<button type="submit" class="btnBasic">Entrar</button>
					</form>
				</div>
			</div>
			<div class="linha">
				<div class="coluna col12 menu" id="header">
					<!-- Logotipo -->
					<img src="img/logo.png" />
				</div>
			</div>
		</header>

		<section>
			<div class="linha">
				<div class="coluna col6">
					<!-- Campo de Informações -->
					<h3>Organize tudo aquilo que você já leu ou assistiu em um único lugar!</h3>
				</div>
				<div class="coluna col6">
					<!-- Campo de Cadastro -->
					<h1 class="cadastro">Cadastro</h1>
					<form>
						<label class="cadastro">Nome:</label>
						<input type="text" class="cadastro" /><br />
						<label class="cadastro">Login:</label>
						<input type="text" class="cadastro" /><br />
						<label class="cadastro">Email:</label>
						<input type="email" class="cadastro" /><br />
						<label class="cadastro">Senha:</label>
						<input type="password" class="cadastro" /><br />
						<button type="submit" class="btnCadastro">Cadastrar</button>
					</form>
				</div>
			</div>
		</section>

		<footer>
			<div class="linha">
				<div class="coluna col12 footer">
					<!-- Rodapé -->
					<span>&copy; 2017 - Gabriel Desenvolvimento Web</span>
				</div>
			</div>
		</footer>
		
	</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<link rel="shortcut icon" href="img/logo.png">
		<meta charset="utf-8">
		<title>TecLib</title>

		<!-- CSS -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
		<link type="text/css" rel="stylesheet" href="css/estilo.css">
		
		<?php
			require_once("lib/conexao.php");
			session_start();
			// Inicializa variáveis de sessão.
			if(!isset($_SESSION['conectado'])) {
				$_SESSION['conectado'] = false;
				$_SESSION['usuario'] = "";
				$_SESSION['id_usuario'] = "";
				$_SESSION['nivel_acesso'] = "";
			}
			$erro_login = "";

			// Log In
			if(isset($_POST['login'])) {
				$login = $_POST['login'];
				$senha = sha1($_POST['senha']);

				$query_login = "SELECT * FROM usuarios
								WHERE (login='$login') && (senha='$senha')";
				$resultado_login = mysqli_query($conexao,$query_login);
				$linha_login = mysqli_fetch_array($resultado_login);

				if($linha_login['id_usuario']) {
					$_SESSION['conectado'] = true;
					$_SESSION['usuario'] = $login;
					$_SESSION['id_usuario'] = $linha_login['id_usuario'];
					$_SESSION['nivel_acesso'] = $linha_login['nivel_acesso'];

					header("location: ?i=home");
				}
				else {
					$_SESSION['conectado'] = false;
					$erro_login = "<script>alert('Login ou senha inválidos!');</script>";
				}
			}
			// Log Out
			if(isset($_GET['sair'])) {
				$_SESSION['conectado'] = false;
				$_SESSION['usuario'] = "";
				$_SESSION['id_usuario'] = "";
				$_SESSION['nivel_acesso'] = "";
				$erro_login = "";

				header("location: ?i=home");
			}
		?>
	</head>
	<body class="bg-dark text-white"  onload="contar('.card')">
		<!-- Cabeçalho -->
		<header style="margin-bottom: 10px">
			<nav class="navbar navbar-expand-lg bg-danger navbar-light">
				<?php echo $erro_login; ?>
				<!-- LOGO -->
				<a href="?i=home" class="navbar-brand">TecLib</a>
				<!-- Menu Collapse -->
				<button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
					<span class="navbar-toggler-icon"></span>
				</button>

				<!-- Links -->
				<div id="menu" class="collapse navbar-collapse">
					<ul class="navbar-nav ml-md-auto">
					<?php if($_SESSION['conectado']) { ?>
						<!-- Botão do Usuário -->
						<li class="nav-item dropdown">
							<a href="#" class="nav-link dropdown-toggle" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="text-transform: capitalize"><?php echo $_SESSION['usuario']; ?></a>
							<div class="dropdown-menu" aria-labelledby="userDropdown">
								<a href="?i=cadastro&add=saga" class="dropdown-item">Adicionar Saga</a>
								<a href="?i=cadastro&add=temporada" class="dropdown-item">Adicionar Temporada</a>
								<div class="dropdown-divider"></div>
								<a href="?sair=1" class="dropdown-item">Sair</a>
							</div>
						</li>
					<?php }
					else { ?>
						<li class="nav-item">
							<a href="#" class="nav-link" data-toggle="modal" data-target="#modal">Entrar</a>
						</li>
					<?php } ?>
						<!-- Botão Home/Mercado -->
						<li class="nav-item dropdown active">
							<a href="#" class="nav-link dropdown-toggle" id="marketDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mercado</a>
							<div class="dropdown-menu" aria-labelledby="marketDropdown">
								<a href="?i=home&tipo=anime" class="dropdown-item">Animes</a>
								<a href="?i=home&tipo=jogo" class="dropdown-item">Jogos</a>
								<a href="?i=home&tipo=livro" class="dropdown-item">Livros</a>
								<a href="?i=home&tipo=serie" class="dropdown-item">Séries</a>
							</div>
						</li>
						<!-- Botão Minha Lista -->
						<li class="nav-item dropdown">
							<a href="#" class="nav-link dropdown-toggle" id="mylistDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Minha lista</a>
							<div class="dropdown-menu" aria-labelledby="mylistDropdown">
								<a href="?i=minha_lista&tipo=anime" class="dropdown-item">Animes</a>
								<a href="?i=minha_lista&tipo=jogo" class="dropdown-item">Jogos</a>
								<a href="?i=minha_lista&tipo=livro" class="dropdown-item">Livros</a>
								<a href="?i=minha_lista&tipo=serie" class="dropdown-item">Séries</a>
							</div>
						</li>
						<!-- Botão Suporte -->
						<li class="nav-item">
							<a href="?i=suporte" class="nav-link">Suporte</a>
						</li>
						<!-- Botão Sobre Nós -->
						<li class="nav-item">
							<a href="?i=sobre_nos" class="nav-link">Sobre nós</a>
						</li>
					</ul>
				</div>
			</nav>
		</header>

		<?php
			if(!$_SESSION['conectado']) {
				include("etc/modal_login.php"); 
			}
		?>
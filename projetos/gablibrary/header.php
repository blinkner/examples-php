<?php
	include("lib/conexao.php");

	define("titulo","Gablibrary");
	define("desenvolvedor","GabRoc");

	session_start();
	if ($_SESSION['conectado'] == false)
	{
		header("location: index.php");
	}
?>

<!DOCTYPE html>	
<html>
	<head>
		<title><?php echo titulo; ?></title>
		<link type="text/css" rel="stylesheet" href="css/normalize.css" />
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/estilo.css" />
		<link rel="shortcut icon" href="img/icon.png">
		<meta charset="utf-8" />

		<script>
			function sair() {
				var exit = confirm("Deseja realmente sair?");
				
				if (exit) {
					location.href = 'index.php?sair=1';
				}
			}
		</script>

	</head>
	<body>

		<header>
			<div class="linha">
				<div class="coluna col6 topo">
					<!-- Logotipo -->
					<a href="home.php"><img src="img/logo.png" class="logo" /></a>
				</div>
				<div class="coluna col6 topo right">
					<!-- Botões de Manipulação -->
					<div class="dropdown">
					<button class="dropbtn"><?php echo $_SESSION['usuario']; ?></button>
						<div class="dropdown-content">
							<a href="admin/home.php">Entrar</a>
							<a onclick="sair()">Sair</a>
						</div>
					</div>

					<!-- <span id="profileName"><?php //echo $_SESSION['usuario']; ?></span> -->
					<!-- <a href="admin/home.php"><button type="button" class="btnBasic">Entrar</button></a> -->
					<!-- <button type="button" class="btnBasic" id="exit" onclick="sair()">Sair</button> -->
				</div>
				<div class="coluna col12 topo menu">
					<!-- Botões do Menu -->
					<ul class="menu">
						<li class="btn-menu"><a href="pagina.php?tag=anime">Animes</a></li>
						<li class="btn-menu"><a href="pagina.php?tag=jogo">Jogos</a></li>
						<li class="btn-menu"><a href="pagina.php?tag=livro">Livros</a></li>
						<li class="btn-menu"><a href="pagina.php?tag=novela">Novelas</a></li>
						<li class="btn-menu"><a href="pagina.php?tag=serie">Séries</a></li>
					</ul>
				</div>
			</div>	
		</header>
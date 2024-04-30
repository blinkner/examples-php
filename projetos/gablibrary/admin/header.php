<?php
	include('../lib/conexao.php');
	session_start();
	
	if ($_SESSION['conectado'] == false)
	{
		header("location: ../index.php");
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Administrador</title>
		<link type="text/css" rel="stylesheet" href="../css/normalize.css" />
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="estilo.css" />
		<link type="text/css" rel="stylesheet" href="../css/estilo.css" />
		<meta charset="utf-8" />

		<script>
			function sair() {
				var exit = confirm("Deseja realmente sair?");
				
				if (exit) {
					location.href = '../index.php?sair=1';
				}
			}
		</script>
	
	</head>
	<body>

		<header>
			<div class="linha">
				<div class="coluna col8 topo">
					<!-- Logotipo -->
					<a href="../home.php"><img src="../img/logo.png" class="logo" /></a>
				</div>
				<div class="coluna col4 topo">
				</div>
				<div class="coluna col12 topo menu">
					<!-- Botões do Menu -->
					<ul class="menu">
						<li class="btn-menu"><a href="home.php">Administrador</a></li>
						<li class="btn-menu"><a href="noticia_lista.php">Notícias</a></li>
						<li class="btn-menu"><a href="produto_lista.php">Produtos</a></li>
						<li class="btn-menu" onclick="sair()"><a>Sair</a></li>
					</ul>
				</div>
			</div>		
		</header>
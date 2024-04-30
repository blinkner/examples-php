<?php
	define("SERVER_DB","localhost");
	define("USER_DB","root");
	define("PASS_DB","");
	define("DATABASE_DB","teclib");

	// Mensagens de erro
	$msg[0] = "Conexão com o banco falhou!";

	// Fazendo a conexão com o servidor MySQL
	$conexao = mysqli_connect(SERVER_DB,USER_DB,PASS_DB,DATABASE_DB) or die($msg[0]);

	// Setando charset do banco
	mysqli_set_charset($conexao,"utf8");
?>
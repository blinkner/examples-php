<?php

/*
Site: TecLib
Autor: Gabriel Márlon
*/

$pagina = 'home';

if(isset($_GET['i']))
{
	$pagina = addslashes($_GET['i']);
}

// Carrega o header.php
include('views/header.php');

// Carrega a página escolhida
switch($pagina)
{
	case 'home':
		include('home.php');
		break;

	case 'minha_lista':
		include('minha_lista.php');
		break;

	case 'suporte':
		include('suporte.php');
		break;

	case 'sobre_nos':
		include('sobre_nos.php');
		break;

	case 'cadastro':
		include('cadastro.php');
		break;
		
	default:
		include('home.php');
		break;
}

// Carrega o footer.php
include('views/footer.php');

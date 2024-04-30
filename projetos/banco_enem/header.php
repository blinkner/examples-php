<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Banco de Perguntas ENEM</title>
        <meta charset="utf-8">

        <!-- CSS -->
		<link type="text/css" rel="stylesheet" href="css/estilo.css">

        <?php
            require_once("lib/conexao.php");
            $pergunta = "";
            $img1 = "";
            $img2 = "";
            $disciplina = "";
            $alt_a = "";
            $alt_b = "";
            $alt_c = "";
            $alt_d = "";
            $alt_e = "";
            $resposta = "";
        ?>
    </head>
    <body>
        <main>
            <nav id="navegacao">
                <h2>Menu</h2>
                <a href="index.php">Página Inicial</a>
                <a href="disciplina.php?d=cn">Ciências da Natureza e suas Tecnologias</a>
                <a href="disciplina.php?d=ch">Ciências Humanas e suas Tecnologias</a>
                <a href="disciplina.php?d=l">Linguagens, Códigos e suas Tecnologias</a>
                <a href="disciplina.php?d=m">Matemática e suas Tecnologias</a>
            </nav>
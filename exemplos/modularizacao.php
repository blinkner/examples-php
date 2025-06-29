<?php
// Modularização de páginas
// Desenvolvido por: blinkner

$pagina = 'home'; // Define a página atual pela URL

if(isset($_GET['pagina'])){
    $pagina = $_GET['pagina'];
}

include 'header.php'; // Carrega o header.php
 
// Carrega a página escolhida pelo usuário
switch ($pagina) {
    case 'contato':
        include 'contato.php';
        break;
    default:
        include 'home.php';
        break;
}

include 'footer.php'; // Carrega o footer.php

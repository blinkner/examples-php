<?php
// Modularização com URL amigável
// Desenvolvido por: blinkner

$slug1 = isset($_GET['slug1']) ? $_GET['slug1'] : 'home';
$slug2 = $_GET['slug2'] ?? '';
$slug3 = $_GET['slug3'] ?? '';

$pagina_dados = array("titulo" => "", "descricao" => "", "palavras-chave" => "", "meta-extra" => "");

include_once 'views/header.php';

if (file_exists("views/{$slug1}.php")) {
    switch ($slug1) {
        case 'home':
            $pagina_dados["titulo"] = "Página inicial";
            include_once "views/{$slug1}.php";
            break;
        default:
            $pagina_dados["titulo"] = "Página padrão";
            include_once "views/{$slug1}.php";
            break;
    }
} else {
    include_once 'error/404.php';
}

include_once 'views/footer.php';

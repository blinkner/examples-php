<?php

$slug1 = isset($_GET['slug1']) ? $_GET['slug1'] : 'home';
$slug2 = $_GET['slug2'] ?? '';
$slug3 = $_GET['slug3'] ?? '';

$pagina_titulo = "";
$pagina_descricao = "";
$pagina_palavras_chave = "";
$meta_extra = "";

if (file_exists("views/{$slug1}.php")) {
    switch ($slug1) {
        case 'slug-pagina':
            $pagina_titulo = "Título da página";
            $pagina_descricao = "";
            $pagina_palavras_chave = "";
            $meta_extra = "";
            include_once 'views/header.php';
            include_once "views/{$slug1}.php";
            break;
        case 'home':
            $pagina_titulo = "Página inicial";
            $pagina_descricao = "";
            $pagina_palavras_chave = "";
            include_once 'views/header.php';
            include_once "views/{$slug1}.php";
            break;
        //default:
        //    $pagina_titulo = "Eventos";
        //    $pagina_descricao = "";
        //    $pagina_palavras_chave = "";
        //    include_once 'views/header.php';
        //    include_once "views/{$slug1}.php";
        //    break;
    }
} else {
    include_once 'views/header.php';
    include_once 'error/404.php';
}

include_once 'views/footer.php';

<?php

$slug1 = isset($_GET['slug1']) ? $_GET['slug1'] : 'home';
$slug2 = $_GET['slug2'] ?? '';
$slug3 = $_GET['slug3'] ?? '';

// include_once("views/header.php");

$pagina_titulo = "";
$pagina_descricao = "";
$pagina_palavras_chave = "";
$meta_extra = "";

session_set_cookie_params(0,'/eventos');

if (file_exists("views/{$slug1}.php")) {
    switch ($slug1) {
        case 'editor-de-pagina':
            $pagina_titulo = "Editor de Página - E(in)vente-se";
            $pagina_descricao = "";
            $pagina_palavras_chave = "";
            $meta_extra = "<meta name='robots' content='noindex'>";
            include_once 'views/header.php';
            include_once "views/{$slug1}.php";
            break;
        case 'editor-de-evento':
            $pagina_titulo = "Editor de Evento - E(in)vente-se";
            $pagina_descricao = "";
            $pagina_palavras_chave = "";
            $meta_extra = "<meta name='robots' content='noindex'>";
            include_once 'views/header.php';
            include_once "views/{$slug1}.php";
            break;
        case 'meu-perfil':
            $pagina_titulo = "Meu Perfil - E(in)vente-se";
            $pagina_descricao = "";
            $pagina_palavras_chave = "";
            $meta_extra = "<meta name='robots' content='noindex'>";
            include_once 'views/header.php';
            include_once "views/{$slug1}.php";
            break;
        case 'home':
            $pagina_titulo = "E(in)vente-se";
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
} elseif (file_exists("error/{$slug1}.php")) {
    include_once 'views/header.php';
    include_once 'error/404.php';
} else {
    include_once 'views/header.php';
    include_once 'views/pagina.php';
}

include_once 'views/footer.php';

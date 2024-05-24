<?php

$slug1 = isset($_GET['slug1']) ? $_GET['slug1'] : 'home';
$slug2 = $_GET['slug2'] ?? '';
$slug3 = $_GET['slug3'] ?? '';

$pagina_titulo = "";
$pagina_descricao = "";
$pagina_palavras_chave = "";
$meta_extra = "";

if (file_exists("views/{$slug1}.php") || file_exists("admin/{$slug1}.php") || $slug1 == 'biblioteca' || $slug1 == 'minha-prateleira') {
    switch ($slug1) {
        case 'painel-de-controle':
            $pagina_titulo = "Painel de Controle - DShelf";
            $pagina_descricao = "";
            $pagina_palavras_chave = "";
            $meta_extra = "<meta name='robots' content='noindex'>";
            include_once 'views/header.php';
            include_once "admin/{$slug1}.php";
            break;
        case 'cadastro':
            $pagina_titulo = "Cadastro - DShelf";
            $pagina_descricao = "";
            $pagina_palavras_chave = "";
            $meta_extra = "<meta name='robots' content='noindex'>";
            include_once 'views/header.php';
            include_once "admin/{$slug1}.php";
            break;
        case 'biblioteca':
            switch ($slug2) {
                case 'anime':
                    $pagina_titulo = "Biblioteca de Animes - DShelf";
                    $pagina_descricao = "";
                    $pagina_palavras_chave = "animes, prateleira digital";
                    break;
                case 'livro':
                    $pagina_titulo = "Biblioteca de Livros - DShelf";
                    $pagina_descricao = "";
                    $pagina_palavras_chave = "livros, prateleira digital";
                    break;
                case 'serie':
                    $pagina_titulo = "Biblioteca de Séries - DShelf";
                    $pagina_descricao = "";
                    $pagina_palavras_chave = "séries, prateleira digital";
                    break;
                default:
                        $pagina_titulo = "Biblioteca - DShelf";
                        $pagina_descricao = "Encontre aqui animes, livros e séries para adicionar e organizar em sua prateleira digital.";
                        $pagina_palavras_chave = "animes, séries, livros, prateleira digital";
                    break;
            }
            include_once 'views/header.php';
            include_once "views/prateleira.php";
            break;
        case 'contato':
            $pagina_titulo = "Contato - DShelf";
            $pagina_descricao = "Entre em contato com o desenvolvedor da DShelf para disponibilizar feedbacks e opiniões sobre a plataforma.";
            $pagina_palavras_chave = "";
            $meta_extra = "<script src='https://www.google.com/recaptcha/api.js' async defer></script>";
            include_once 'views/header.php';
            include_once "views/{$slug1}.php";
            break;
        case 'minha-prateleira':
            switch ($slug2) {
                case 'anime':
                    $pagina_titulo = "Minha Prateleira de Animes - DShelf";
                    $pagina_descricao = "";
                    $pagina_palavras_chave = "meus animes";
                    $meta_extra = "<meta name='robots' content='noindex'>";
                    break;
                case 'livro':
                    $pagina_titulo = "Minha Prateleira de Livros - DShelf";
                    $pagina_descricao = "";
                    $pagina_palavras_chave = "meus livros";
                    $meta_extra = "<meta name='robots' content='noindex'>";
                    break;
                case 'serie':
                    $pagina_titulo = "Minha Prateleira de Séries - DShelf";
                    $pagina_descricao = "";
                    $pagina_palavras_chave = "minhas séries";
                    $meta_extra = "<meta name='robots' content='noindex'>";
                    break;
                default:
                        $pagina_titulo = "Minha Prateleira - DShelf";
                        $pagina_descricao = "";
                        $pagina_palavras_chave = "meus animes, minhas séries, meus livros";
                        $meta_extra = "<meta name='robots' content='noindex'>";
                    break;
            }
            include_once 'views/header.php';
            include_once "views/prateleira.php";
            break;
        case 'minha-conta':
            $pagina_titulo = "Minha Conta - DShelf";
            $pagina_descricao = "";
            $pagina_palavras_chave = "";
            $meta_extra = "<meta name='robots' content='noindex'>";
            include_once 'views/header.php';
            include_once "views/{$slug1}.php";
            break;
        case 'blinkner':
            $pagina_titulo = "Blinkner - O Programador";
            $pagina_descricao = "Meu nome é Gabriel Marlon, conhecido como Blinkner, e sou um programador iniciante, mas com grande conhecimento e paixão pelo desenvolvimento web.";
            $pagina_palavras_chave = "programador web, desenvolvedor web";
            include_once 'views/header.php';
            include_once "views/{$slug1}.php";
            break;
        case 'politica-de-privacidade':
            $pagina_titulo = "Política de Privacidade - DShelf";
            $pagina_descricao = "A sua privacidade é importante para nós. É política do site DShelf respeitar a sua privacidade em relação a qualquer informação sua que possamos coletar.";
            $pagina_palavras_chave = "";
            $meta_extra = "<meta name='robots' content='noindex'>";
            include_once 'views/header.php';
            include_once "views/{$slug1}.php";
            break;
        default:
            $pagina_titulo = "DShelf: Sua Prateleira Digital";
            $pagina_descricao = "Bem-vindo à sua prateleira digital! Tenha controle de tudo aquilo que você lê e assiste, como animes, livros e séries, em um único lugar.";
            $pagina_palavras_chave = "prateleira digital, meus animes, meus livros, minhas séries";
            include_once 'views/header.php';
            include_once "views/{$slug1}.php";
            break;
    }
} else {
    include_once 'views/header.php';
    include_once 'views/error/404.php';
}

include_once 'views/footer.php';

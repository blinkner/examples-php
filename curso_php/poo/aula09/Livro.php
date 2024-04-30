<?php
require_once 'Publicacao.php';
require_once 'Pessoa.php';
class Livro implements Publicacao
{
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    public function __construct($titulo, $autor, $totPaginas, $leitor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->pagAtual = 0;
        $this->aberto = false;
        $this->leitor = $leitor;
    }
    public function getTitulo() {
        return $this->titulo;
    }
    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }
    public function getAutor() {
        return $this->autor;
    }
    public function setAutor($autor) {
        $this->autor = $autor;
    }
    public function getTotPaginas() {
        return $this->totPaginas;
    }
    public function setTotPaginas($totPaginas) {
        $this->totPaginas = $totPaginas;
    }
    public function getPagAtual() {
        return $this->pagAtual;
    }
    public function setPagAtual($pagAtual) {
        $this->pagAtual = $pagAtual;
    }
    public function getAberto() {
        return $this->aberto;
    }
    public function setAberto($aberto) {
        $this->aberto = $aberto;
    }
    public function getLeitor() {
        return $this->leitor;
    }
    public function setLeitor($leitor) {
        $this->leitor = $leitor;
    }
    public function detalhes() {
        echo "<p>Livro " . $this->getTitulo() . " escrito por " . $this->getAutor() . ".</p>";
        echo "<p>Página " . $this->getPagAtual() . " de " . $this->getTotPaginas() . " páginas.</p>";
        echo "<p>Sendo lido por " . $this->leitor->getNome() . ".</p>";
    }
    public function abrir() {
        if (!$this->getAberto()) {
            $this->setAberto(true);
        }
    }
    public function fechar() {
        if ($this->getAberto()) {
            $this->setAberto(false);
        }
    }
    public function folhear($pagina) {
        if ($pagina > $this->totPaginas) {
            $this->setPagAtual(0);
        } else {
            $this->setPagAtual($pagina);
        }
    }
    public function avancarPag() {
        if ($this->getPagAtual() == $this->getTotPaginas()) {
            echo "<p>Você já está na última página!</p>";
        } else {
            $this->setPagAtual($this->getPagAtual() + 1);
        }
    }
    public function voltarPag() {
        if ($this->getPagAtual() == 0) {
            echo "<p>Você já está na primeira página!</p>";
        } else {
            $this->setPagAtual($this->getPagAtual() - 1);
        }
    }
}
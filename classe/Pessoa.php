<?php
class Pessoa
{
    // public, private, protected.
    protected $nome;
    const ESPECIE = "Humana";	// Constante.

    public function __construct($tmpNome) {
        $this->nome = $tmpNome;
    }
    public function setNome($novoNome) {
        $this->nome = $novoNome;
    }
    public function getNome() {
        return $this->nome;
    }
}

<?php
require_once 'Lutador.php';
class Luta
{
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    public function setDesafiado($desafiado) {
        $this->desafiado = $desafiado;
    }
    public function getDesafiado() {
        return $this->desafiado;
    }
    public function setDesafiante($desafiante) {
        $this->desafiante = $desafiante;
    }
    public function getDesafiante() {
        return $this->desafiante;
    }
    public function setRounds($rounds) {
        $this->rounds = $rounds;
    }
    public function getRounds() {
        return $this->rounds;
    }
    public function setAprovada($aprovada) {
        $this->aprovada = $aprovada;
    }
    public function getAprovada() {
        return $this->aprovada;
    }
    public function marcarLuta($lutador1, $lutador2) {
        if ($lutador1->getCategoria() == $lutador2->getCategoria() && $lutador1 != $lutador2) {
            $this->aprovada = true;
            $this->setDesafiado($lutador1);
            $this->setDesafiante($lutador2);
            echo "<p>Luta marcada entre " . $this->desafiado->getNome() . " e " . $this->desafiante->getNome() . ".</p>";
        } else {
            $this->aprovada = false;
            $this->setDesafiado(null);
            $this->setDesafiante(null);
            echo "<p>Luta inválida.</p>";
        }
    }
    public function lutar() {
        if ($this->aprovada) {
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = mt_rand(0,2);
            switch ($vencedor) {
                case 0:
                    echo "<p><strong>Empatou!</strong></p>";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;
                case 1:
                    echo "<p><strong>". $this->desafiado->getNome() ." ganhou!</strong></p>";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                case 2:
                    echo "<p><strong>". $this->desafiante->getNome() ." ganhou!</strong></p>";
                    $this->desafiado->perderLuta();
                    $this->desafiante->ganharLuta();
                    break;
                
                default:
                    break;
            }
        } else {
            echo "<p>Luta não pode acontecer.</p>";
        }
    }
}
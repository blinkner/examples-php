<?php
require_once 'Aluno.php';
class Tecnico extends Aluno
{
    private $registroProfissional;

    public function getRegistroProfissional() {
        return $this->registroProfissional;
    }
    public function setRegistroProfissional($registroProfissional) {
        $this->registroProfissional = $registroProfissional;
    }
    public function praticar() {
        echo "<p>Praticando...</p>";
    }
}
<?php

require "Pessoa.php";
require "Programador.php";

$programador = new Programador("Gabriel", "PHP");

var_dump($umaPessoa);	// Imprime saídas da classe.

echo $programador->getNome();

# constantes
echo $programador::ESPECIE;
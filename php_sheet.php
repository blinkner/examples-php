<?php

$bibliografia = array('php.net', 'Aprendendo PHP', 'PHP Moderno', 'Programming PHP', 'Learn PHP 8', 'PHP 8 Quick Scripting Reference', 'PHP & MYSQL')
$sequencias_de_escape = array("\"", "\'", "\n", "\t", "\\", "\$", "\u{}");
$operadores = array('+', '-', '*', '/', '**', '%', '.');

// Escreve na tela.
echo "Olá, Mundo!";
print "Olá Mundo!";
<<< FRASE
    Eu amo a
        Linguagem PHP
    FRASE;
<<< 'FRASE'
    Eu amoo a
        Linguagem PHP
    FRASE;

// Mostra informações da variável.
var_dump($variavel);
print_r($variavel);

$nome = 'Gabriel'; // Variável
const NACIONALIDADE = 'brasileiro'; // Constante

// Informações do servidor.
phpinfo();

// Modificadores de Strings
str_replace(' ', '-', 'eu amo php'); // eu-amo-php
strlen('euamophp'); // 8
strtolower('EU AMO PHP'); // eu amo php
strtoupper('eu amo php'); // EU AMO PHP

// Modificadores de Array
explode('-', 'eu-amo-php'); // array('eu', 'amo', 'php');
implode('-', array('eu', 'amo', 'php')); // eu-amo-php
count(array('eu', 'amo', 'php')); // 3

// Modificadores de Números
abs(-3); // 3
base_convert(11, 2, 10); // 3
ceil(8.6); // 9
floor(8.6); // 8
round(8.6); // 9
hypot();
intdiv(5,2); // Divisão inteira: 2
fmod(5,2); // Resto da divisão em float: 1,0
min(2,5,3,7); // 2
max(2,5,3,7); // 7
pi(); // 3,14...
pow(3,2) // 9
sin();
cos();
tan();
sqrt(81); // 9
rand(0,100); // 57
mt_rand(0,100); // 35
random_int(0,100); // 85
number_format(5.834, 2, ",", "."); // 5,83

// Criação de padrão de moeda internacionalizada
$padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
numfmt_format_currency($padrao, 50, "BRL"); // R$ 50,00

// Coerção
$int = (int) '10'; // 10
$float = (float) '25'; // 25.0
$string = (string) 950; // '950'
$bool = (bool) 250; // true

// Variáveis globais
$_POST['nome'] = 'Gabriel';
$_GET['idade'] = 23;
$_REQUEST['cidade'] = 'Divinópolis';
setcookie('mensagem', 'Eu amo PHP', time() + 30);
$_COOKIES['mensagem'] = 'Eu amo PHP';
$_FILES;
$_ENV;
$_SERVER;
$_SERVER['PHP_SELF']; // Próprio arquivo
$GLOBALS;

if (condicao) {bloco}
for ($i = 0, $i < 10, $i++) {bloco}
while (true) {bloco}

?>
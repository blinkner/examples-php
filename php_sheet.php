<?php
$bibliografia = array('php.net', 'Aprendendo PHP', 'PHP Moderno', 'Programming PHP', 'Learn PHP 8', 'PHP 8 Quick Scripting Reference', 'PHP & MYSQL');
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
hypot($x, $y);
intdiv(5,2); // Divisão inteira: 2
fmod(5,2); // Resto da divisão em float: 1,0
min(2,5,3,7); // 2
max(2,5,3,7); // 7
pi(); // 3,14...
pow(3,2); // 9
sin($num);
cos($num);
tan($num);
sqrt(81); // 9
rand(0,100); // 57
mt_rand(0,100); // 35
random_int(0,100); // 85
number_format(5.834, 2, ",", "."); // 5,83

// Criação de padrão de moeda internacionalizada
$padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
numfmt_format_currency($padrao, 50, "BRL"); // R$ 50,00

// Datas
date_default_timezone_set("America/Sao_Paulo");
date("d/M/Y G:i:s");

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
$_COOKIE['mensagem'] = 'Eu amo PHP';
$_FILES;
$_ENV;
$_SERVER;
$_SERVER['PHP_SELF']; // Próprio arquivo
$GLOBALS;

// Sessão
session_start();
$_SESSION['usuario'] = 'Gabriel';

// Tipos primitivos
$hexadecimal = 0x23;
$binario = 0b11;
$octal = 023;
$exponencial = 3e2; // 3 x 10^(2)

// Constantes mágicas
__LINE__; // Retorna o número da linha do script na qual ela foi declarada.
__FILE__; // Retorna o caminho do arquivo PHP.
__DIR__; // Retorna o diretório.
__FUNCTION__; // Retorna a function a qual foi declarada.
__CLASS__; // Retorna a class a qual foi declarada.
__METHOD__; // Retorna a classe e o método a qual foi declarada.
__NAMESPACE__; // Retona o namespace a qual foi declarada.

// Estrutura condicional
if (5 % 2 == 1) {echo 'ímpar';} else {echo 'par';}

// Estruturas de repetição
for ($i = 0; $i < 10; $i++) {echo 'bloco';}
foreach ($variavel as $key => $valor) {echo $key, ': ', $valor;}
while (true) {echo 'bloco';}
do {echo 'bloco';} while (true);

// Padrão de exceções
try {
	// try body
} catch (FirstExceptionType $e) {
	// catch body
} catch (OtherExceptionType $e) {
	// catch body
}
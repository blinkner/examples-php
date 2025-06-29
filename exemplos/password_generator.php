<?php
// Gerar senha aleatória com 8 caracteres
// Desenvolvido por: blinkner

$maiusculas = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$minusculas = 'abcdefghijklmnopqrstuvwxyz';
$numeros = '0123456789';
$simbolos = '!@#$%&*()_+=';
$tamanho = 8;

$senha = str_shuffle($maiusculas);
$senha .= str_shuffle($minusculas);
$senha .= str_shuffle($numeros);
$senha .= str_shuffle($simbolos);

$senha = substr(str_shuffle($senha), 0, $tamanho);

echo $senha;

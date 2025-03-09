<?php
define("SERVER_DB", ""); // localhost
define("USER_DB", ""); // Usuário do banco de dados
define("PASS_DB", ""); // Senha do banco de dados
define("DATABASE_DB", ""); // Nome do banco de dados

// Mensagens de erro
$msg[0] = "Conexão com o banco falhou!";

// Fazendo a conexão com o servidor MySQL
$conexao = new mysqli(SERVER_DB, USER_DB, PASS_DB, DATABASE_DB);
if ($conexao->connect_errno > 0) {
    trigger_error($msg[0]);
}

// Setando charset do banco
$conexao->set_charset("utf8");

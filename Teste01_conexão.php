<?php 

// Criação de variaveis para conexão com o banco de dados

$host = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'teste2';

// Criação de conexão com o banco de dados

$conexao = new mysqli($host,$usuario,$senha,$banco);

// Teste de conexão com o banco de dados

if ($conexao->connect_error){
    die ('Erro de conexão: '.$conexao->connection_error);
} else {
    echo "Parabéns, você conseguiu conectar na base: ".$banco;
}

?> 
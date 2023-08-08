<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="icon" href="img/Icone_usuário.png">
    <title>Banco de dados - Usuário</title>
</head>
<body>
    
</body>
</html>

<?php 

// Criação de variaveis para conexão com o banco de dados

$host = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'db_teste2';

// Criação de variaveis para inserção de dados no banco
$codigo = '1';
$nome = 'Vitor';

// Criação de conexão com o banco de dados

$conexao = new mysqli($host,$usuario,$senha,$banco);

// Teste de conexão com o banco de dados

if ($conexao->connect_error){
    die ('Erro de conexão: '.$conexao->connect_error);
    
} else {
    echo "Parabéns, você conseguiu conectar na base: ".$banco;
}

// Pular/Quebrar uma linha
echo '<br><br>';

// Inserir dados na tabela do banco de dados

$sql = "INSERT INTO usuário VALUES ('$codigo','$nome')";

// Executa comando na query
$resultado = $conexao->query($sql);

// Realizar busca no banco de dados
$sql = "SELECT * FROM usuário WHERE Código = 1";

// Executa o comando na query
$resultado = $conexao->query($sql);

// Executa e associa a busca no banco de dados
$linha = $resultado->fetch_assoc();

var_dump ($linha);

?> 
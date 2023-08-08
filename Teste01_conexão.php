

<?php 

// Criação de variaveis para conexão com o banco de dados

$host = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'db_teste2';
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

//$sql = "SELECT * FROM usuário WHERE Código = 1";



// Inserir dados na tabela do banco de dados

$sql = "INSERT INTO usuário VALUES ('$codigo','$nome')";

// Executa comando na query
$resultado = $conexao->query($sql);

?> 
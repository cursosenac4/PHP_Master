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
    <header>
        <nav>
            <div class="form1">
            <form action="Teste01_conexão.php" method="POST">
            <label>Nome:<input type="text" name="nome"></label>
            <label>Idade:<input type="text" name="idade"></label>
            <input type="submit" class="submit" value="Inserir">
            </form>
            </div>
            <div class="form2">
            <form action="Teste01_conexão.php" method="POST">
            <label>Código do usuário:<input type="text" name="id_exluir"></label>            
            <input type="submit" class="submit" value="Excluír">
            </div>
            </form>
        </nav>
    </header>    
</body>
</html>

<?php 
// if($_SERVER['REQUEST_METHOD'] === 'POST'){

// Criação de variaveis para conexão com o banco de dados

$host = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'db_teste2';
$conexao = new mysqli($host,$usuario,$senha,$banco);

/*// Criação de variaveis para inserção de dados no banco
$codigo = '1';
$nome = 'Vitor';*/

// Criação de conexão com o banco de dados


/*// Teste de conexão com o banco de dados

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
$resultado = $conexao->query($sql);*/

// Realizar busca no banco de dados
//******$sql = "SELECT * FROM usuário WHERE Código = 1";

// Executa o comando na query
//******$resultado = $conexao->query($sql);

// Executa e associa a busca no banco de dados
/******$linha = $resultado->fetch_assoc();

var_dump ($linha);*/

// Seleção dos dados da tabela cliente - Código 1 do cliente
/*$sql = "SELECT nome, idade, sexo FROM cliente WHERE codcli = 1";

$resultado = $conexao->query($sql);
echo '<br><br>';

$linha = $resultado->fetch_assoc();
$nome = $linha['nome'];
$idade = $linha['idade'];
$sexo = $linha['sexo'];

echo "Nome: ",$nome," ";
echo '<br>';
echo "Idade: ",$idade," ";
echo '<br>';*/
//echo "Sexo: ",$sexo," ";

// 09/08/2023

// Receber valores do formulário
if(isset($_POST['nome'])&& isset($_POST['idade'])){
    $host = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'db_teste2';
$conexao = new mysqli($host,$usuario,$senha,$banco);
    // Receber valores do formulário
    $novoNome = $_POST['nome'];
    $novaIdade = $_POST['idade'];

    // Consulta SQL para inserir um novo registro
    $sqlInserir = "INSERT INTO usuário(nome, idade) VALUES ('$novoNome','$novaIdade')";

    if($conexao->query($sqlInserir) === TRUE){
        echo "Novo registro inserido com sucesso!";
    } else {
        echo "Erro ao inserir novo registro!";
    }

// Consulta SQL para excluir registr
    if(isset($_POST['id_excluir'])){
        $idExcluir = $_POST['id_exluir'];
        echo $idExcluir;
        $sqlExcluir = "DELETE FROM usuário WHERE código = $idExcluir";

        if($conexao->query($sqlExcluir) === TRUE) {
            echo "Registro Excluído com sucesso!";
        } else {
            echo "Erro ao excluír o registro!".$conexao->error;
        }
    }
}

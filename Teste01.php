<?php 

// Nome do autor
$nome = 'Vitor Carvalho'; 
echo $nome;

// Concatenar strings

echo '<br><br>';

$nome = "Vitor";
$Saudacao = "Olá, ".$nome."! Bem vindo ao nosso site";
echo $Saudacao;

echo '<br><br>';

//(==) Igual
/*$valor1=10;
$valor2="10";
if ($valor1 == $valor2){

    echo "Os valores são iguais";
} else {

    echo "Os valores são diferentes";

}

echo '<br><br>';

//(===) Identico
$valor1=10;
$valor2="10";
if ($valor1 === $valor2){

    echo "Os valores são iguais";
} else {

    echo "Os valores são diferentes";

}*/

// Teste com input
$valor1 = isset($_POST['valor1']) ? $_POST['valor1'] : 10;
$valor2 = isset($_POST['valor2']) ? $_POST['valor2'] : "10";

$resultado = ($valor1 == $valor2) ? "Os valores são iguais" : "Os valores são diferentes";

?>

<!DOCTYPE html>
<html>
<head>
    <title>Comparação de Valores</title>
</head>
<body>

<form method="post" action="">
    Valor 1: <input type="text" name="valor1" value="<?php echo $valor1; ?>"><br>
    Valor 2: <input type="text" name="valor2" value="<?php echo $valor2; ?>"><br>
    <input type="submit" value="Comparar">
</form>

<p><?php echo $resultado; ?></p>

</body>
</html>


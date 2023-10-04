<?php
//Capturando os valores do formulário HTML
$num01 = filter_input(INPUT_POST,"txtNum1");
$num02 = filter_input(INPUT_POST,"txtNum2");
//Calculo dos valores e armazenamento na varíavel $res
$res = ($num01 + $num02);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Formulário 1</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <h1>Formulário 1</h1>
    <form method="post">
        <label>Número 1: <input type="text" name="txtNum1"/></label><br>
        <label>Número 2: <input type="text" name="txtNum2"/></label><br>
        <br>
        <input type="submit" name="btnCalcular" value="Calcular">
    </form>
    <h1>Resultado</h1>
    <h1><?php echo $res; ?></h1>
</body>
</html>

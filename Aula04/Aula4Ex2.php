<?php
$idade = filter_input(INPUT_POST,"txtIdade");
$temConvite = filter_input(INPUT_POST,"txtConvite");
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Exercício 2</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <h1>Autorização</h1>
    <form method="post">
    <label>Sua idade:<input type="text" name="txtIdade"/></label><br>
    <label>Tem convite? S ou N<input type="text" name="txtConvite"/></label><br>
    <input type="submit" name="btnEnviar" value="Enviar">
    </form>
    <?php if ($idade >= 18 && $temConvite == "S") {
        echo "Pode entrar na festa!";
    } else {
        echo "Não pode entrar na festa!";
    } ?>
</body>
</html>

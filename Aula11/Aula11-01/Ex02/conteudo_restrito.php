
<?php
    //Verifica se o usuário está autenticado
    if(!isset($_COOKIE['autenticado']) || $_COOKIE['autenticado'] !== 'true'){
        header('Location: login.php');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conteúdo Restrito</title>
</head>
<body>
    <h1>Conteúdo Restrito</h1>
    <p>Este é um conteúdo restrito acessível apenas para usuários autenticados.</p>
    <p><a href="logout.php">Sair</a></p>
</body>
</html>

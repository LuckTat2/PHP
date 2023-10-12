<?php
    //Verifica se o formulário de login foi enviado
    if (isset($_POST['login'])){
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        //Verifica se o usuário e a senha correspondem
        if ($usuario === 'usuario1' && $senha === 'senha123'){
            //Autenticação bem-sucedida, cria um cookie de autenticação
            setcookie('autenticado', 'true', time()+3600); //Define o cookie para durar 1 hora
            header('Location: conteudo_restrito.php');
            exit;
        } else {
            $erro = "Credenciais Inválidas. Tente Novamente.";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Login</title>
</head>
<body>
    <h1>Página de Login</h1>
    <?php
        if(isset($erro)){
            echo $erro."<p>";
        }
    ?>
    <form method="post">
        <label for="usuario">Usuário:</label>
        <input type="text" name="usuario" id="usuario">
        <br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha">
        <br>
        <input type="submit" name="login" value="Login">
    </form>
</body>
</html>

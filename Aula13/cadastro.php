<?php
include('conexao.php');

if(isset($_POST['cadEmail']) && isset($_POST['cadSenha'])) {
    $cadEmail =  $mysqli->real_escape_string($_POST['cadEmail']);
    $cadSenha = $mysqli->real_escape_string($_POST['cadSenha']);

    // Verifica se o email já existe no banco de dados
    $sql_check = "SELECT * FROM usuarios WHERE email = '$cadEmail'";
    $result_check = $mysqli->query($sql_check);

    if ($result_check->num_rows > 0) {
        echo "Este email já está cadastrado. Escolha outro.";
    } else {
        // Insere os dados no banco de dados
        $sql_cad = "INSERT INTO usuarios (email, senha) VALUES ('$cadEmail', '$cadSenha')";

        if ($mysqli->query($sql_cad)) {
            echo "Cadastro realizado com sucesso. <a href='index.php'>Clique aqui para fazer login</a>";
        } else {
            echo "Erro ao cadastrar: " . $mysqli->error;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h1>Faça seu cadastro</h1>
    <form action="" method="post">
        <label for="cadEmail">E-mail</label>
        <input type="text" name="cadEmail" id="cadEmail"><p>
        <label for="cadSenha">Senha</label>
        <input type="password" name="cadSenha" id="cadSenha"><p>
        <input type="submit" value="Cadastrar">
    </form>
    <a href='index.php'>Voltar</a>
</body>
</html>
<?php 
    //Define o nome do cookie como "usuario"
    $nome_cookie = "usuario";

    //Define o valor do cookie como "Aluno"
    $valor_cookie = "Aluno";

    //Cria um cookie chamado "usuario" com o valor "Aluno"
    //e define a validade para 1 hora a partir do momento atual
    setcookie($nome_cookie, $valor_cookie, time() + 3600);
?>
<html>
    <body>
<!--tag php tem que estar fora da indentação da tag body-->
<?php
    //Verifica se o cookie com o nome "usuario" já foi atribuído
    if(!isset($_COOKIE[$nome_cookie])){
        //Se não foi atribuído, exibe uma mensagem informando que o cookie não está definido
        echo "Cookie ".$nome_cookie." não está atribuído!";
    } else {
        //Se o cookie foi atribuído, exibe uma mensagem informando que o cookie está definido
        echo "Cookie ".$nome_cookie." está atribuído!<br>";

        //Exibe o valor do cookie
        echo "Valor: ".$_COOKIE[$nome_cookie];
    }
?>
    </body>
</html>
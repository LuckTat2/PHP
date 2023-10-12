<?php
    //Inicia ou recupera uma sessão existente
    session_start();

    //Limpa todas as variáveis de sessão (os valores da sessão) definindo o array $_SESSION como vazio
    $_SESSION = array();

    //Destroi a sessão completamente
    session_destroy();

    //Mensagem de confirmação
    echo "<h2>Sessão destruída com sucesso.</h2>";

    //Redireciona o usuário para uma página após a destruição da sessão (por exemplo, uma página de login)
    //header('Location: sessao.php');
?>

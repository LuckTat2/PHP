<?php
    //Inicia ou recupera uma sessão existente
    session_start();

    //Exibe um cabeçalho na página HTML
    echo "<h2>Dados da Sessão: </h2>";

    //Exibe os valores das variáveis de sessão, acessando o array $_SESSION
    echo $_SESSION['nome']."<br>";
    echo $_SESSION['sobrenome']."<br>";
    echo $_SESSION['data']."<br>";

    //Cria um link para encerrar a sessão (sair)
    echo "<br><a href='destroi_sessao.php'>Sair</a>";
?>

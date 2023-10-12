
<?php
    //Inicia ou recupera uma sessão. Deve estar no início do documento, antes das tags HTML.
    session_start();

    //Define variáveis de sessão
    $_SESSION['nome'] = "Aluno"; //Define uma variável 'nome' na sessão com o valor "Aluno"
    $_SESSION['sobrenome'] = "Dois"; //Define uma variável 'sobrenome' na sessão com o valor "Dois"
    $_SESSION['data'] = date('d/m/y', time()); //Define uma variável 'data' na sessão com a data atual no formato 'd/m/y'

    //Exibe uma mensagem para o usuário
    echo "<h2>As variáveis de sessão foram definidas.</h2>";
    //Cria um link para outra página que mostrará os dados da sessão
    echo "<a href='mostrar_sessao.php'>Dados da Sessão</a>";
?>

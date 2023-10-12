
<?php
    //Expira o cookie de autenticação
    setcookie('autenticado','',time() - 3600);
    //Define a data de validade no passado para remover o cookie
    header('Location: login.php');
    exit;
?>

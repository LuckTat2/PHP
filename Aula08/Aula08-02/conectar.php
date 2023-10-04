<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "aula_php";

    //Cria a conexão
    $strcon = mysqli_connect($servername, $username, $password, $database);

    //Verifica a conexão
    if (!$strcon)
    {
        die("Falha na conexão: ".mysqli_connect_error());
    }
    echo "<h2>Sucesso na Conexão</h2>";
?>

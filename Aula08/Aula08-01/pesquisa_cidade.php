<?php
    //Inclui o arquivo conectar.php para estabelecer a conexão com o banco de dados
    include_once("conectar.php");
    //Obtém o valor da cidade selecionada pelo usuário no formulário html e armazena na variável $pesquisa
    $pesquisa = $_POST['cidade'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--Criando a tabela e o cabeçalho de dados-->
    <table border="1" style='width:50%'>
        <tr>
        <!--Define o cabeçalho da tabela para exibir os resultados da pesquisa-->
        <th>NOME</th>
        <th>MATRICULA</th>
        <th>CURSO</th>
        <th>E-MAIL</th>
        <th>TELEFONE</th>
        <th>ENDEREÇO</th>
        <th>CEP</th>
        <th>CIDADE</th>
        <th>UF</th>
        <th>H. COMP.</th>
        <th>CAR. HOR.</th>
        </tr>

        <?php
            //Realiza a busca na tabela "alunos" com base na cidade selecionada
            //Usa a variável $pesquisa como critério de filtro
            //Utiliza a função mysqli_query() para executar a consulta
            $sql = "SELECT * FROM alunos WHERE cidade = '$pesquisa'";
            $resultado = mysqli_query($strcon, $sql);

            //O loop while percorre os resultados da consulta e armazena cada linha em $registro
            //A cada laço do while, preenchemos uma linha da nossa tabela
            while ($registro = mysqli_fetch_array($resultado))
            {
                $nome = $registro['nome'];
                $matricula = $registro['matricula'];
                $curso = $registro['curso'];
                $email = $registro['email'];
                $telefone = $registro['telefone'];
                $endereco = $registro['endereco'];
                $cep = $registro['cep'];
                $cidade = $registro['cidade'];
                $uf = $registro['uf'];
                $hcomp = $registro['hcomp'];
                $chor = $registro['chor'];
                echo "<tr>";
                echo "<td>".$nome."</td>";
                echo "<td>".$matricula."</td>";
                echo "<td>".$curso."</td>";
                echo "<td>".$email."</td>";
                echo "<td>".$telefone."</td>";
                echo "<td>".$endereco."</td>";
                echo "<td>".$cep."</td>";
                echo "<td>".$cidade."</td>";
                echo "<td>".$uf."</td>";
                echo "<td>".$hcomp."</td>";
                echo "<td>".$chor."</td>";
                echo "</tr>";
            }
            //Fecha a conexão com o banco de dados quando não há mais dados a serem apresentados
            mysqli_close($strcon);
            //Fecha a tabela html que exibe os resultados
            echo "</table>";
        ?>
</body>
</html>

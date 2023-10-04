<?php
    include_once("conectar.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa Alunos</title>
</head>
<body>
    <!--Criando a tabela e o cabeçalho de dados-->
    <table border="1" style="width:50%">
        <tr>
            <th>NOME</th>
            <th>MATRICULA</th>
            <th>CURSO</th>
            <th>E-MAIL</th>
            <th>ENDEREÇO</th>
            <th>TELEFONE</th>
            <th>CEP</th>
            <th>CIDADE</th>
            <th>UF</th>
            <th>H. COMP.</th>
            <th>CAR. H.</th>
        </tr>
    <!--Preenchendo a tabela com os dados do banco-->
    <?php
        $sql = "SELECT * FROM alunos";
        $resultado = mysqli_query($strcon, $sql);

        //O loop while percorre os resultados da consulta e armazena cada linha em $registro
        //A cada laço do while, preenchemos uma linha da nossa tabela
        while($registro = mysqli_fetch_array($resultado))
        {
            $nome = $registro['nome'];
            $matricula = $registro['matricula'];
            $curso = $registro['curso'];
            $email = $registro['email'];
            $endereco = $registro['endereco'];
            $telefone = $registro['telefone'];
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
            echo "<td>".$endereco."</td>";
            echo "<td>".$telefone."</td>";
            echo "<td>".$cep."</td>";
            echo "<td>".$cidade."</td>";
            echo "<td>".$uf."</td>";
            echo "<td>".$hcomp."</td>";
            echo "<td>".$chor."</td>";
            echo "</tr>";
        }

        //Fecha a conexão com o banco de dados quando não há mais dados
        mysqli_close($strcon);
        //Fecha a tabela html que exibe os resultados
        echo "</table>";
    ?>
    <!--Formulário que redireciona action para exclui.php-->
    <form name="exclui" action="exclui.php" method="post">
        <p>Digite o nome que deseja excluir:
        <!--Campo para digitar o nome que se deseja excluir-->
        <input type="text" name="nome" /></p>
        <!--Botão que executa a exclusão-->
        <input type="submit" name="botao" value="Enviar"/>
    </form>
</body>
</html>

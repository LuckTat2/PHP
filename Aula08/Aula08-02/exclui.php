<?php
    //Inclui o arquivo conectar.php para realizar a conexão com o banco de dados
    include_once("conectar.php");
    //Obtém o valor do nome que foi enviado pelo formulário atráves do metódo POST e o armazena na varíavel $nome
    $nome = $_POST['nome'];
    //Cria uma consulta SQL para excluir registros da tabela "alunos", onde o valor da coluna "nome" corresponde ao valor armazenado em $nome
    $sql = "DELETE FROM alunos WHERE nome = '$nome'";
    //Executa a consulta SQL no banco de dados usando a função mysqli_query()
    //O resultado da execução é armazenado na variável $resultado
    $resultado = mysqli_query($strcon, $sql);
    //É importante fechar a conexão após a conclusão das operações no banco de dados
    echo "Exclusão realizada com sucesso!";
    mysqli_close($strcon);
?>

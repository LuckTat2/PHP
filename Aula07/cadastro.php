

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Formulário de Cadastro - PHP</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $nome = $_POST['nome'];
            $matricula = $_POST['matricula'];
            $curso = $_POST['curso'];
            $email = $_POST['email'];
            $telefone = $_POST['telefone'];
            $endereco = $_POST['endereco'];
            $cep = $_POST['cep'];
            $cidade = $_POST['cidade'];
            $uf = $_POST['uf'];
            $hcomp = $_POST['hcomp'];
            $chor = $_POST['chor'];
        }
            //Na linha abaixo, poderia ser usado isset($nome) && isset($email) e assim por diante
            //isset verifica se a varíavel está definida e retorna um valor verdadeiro ou falso
            /* if (empty($nome) || empty($email) || empty($matricula) || empty($curso) || empty($telefone) || empty($endereco) || empty($cep) || empty($uf) || empty($chor) || empty($hcomp) || empty($cidade)){
                header("Location: falha.php"); //header redireciona para outra página
                exit;
            } else {
                header("Location: sucesso.php");
                exit;
            }
        } else {
            header("Location: agradecimentos.php");
            exit;
        } */
       
        //Conexão com banco de dados MySQL (Host, Usuário, Senha, Banco de Dados)
        $conexao = mysqli_connect("localhost", "root", "", "aula_php");

        //Verifica se a conexão foi bem-sucedida e caso não, exibe a mensagem de erro no MySQL e encerra o script com o die()
        if(!$conexao) {
            die ("Erro de conexão com o Banco de Dados");
        }

        //Cria a consulta SQL para inserir dados na tabela "alunos
        $sql =  "INSERT INTO alunos (nome, endereco, cidade, cep, uf, hcomp, chor, telefone, email, curso, matricula) VALUES ('$nome', '$endereco', '$cidade', '$cep', '$uf', '$hcomp', '$chor', '$telefone', '$email', '$curso', '$matricula')";

        //Executa a consulta SQL no Banco de Dados e armazena o resultado
        $resultado = mysqli_query($conexao, $sql);

        //Fecha a conexão com o Banco de Dados para liberar recursos
        mysqli_close($conexao);

    ?>
</body>
</html>


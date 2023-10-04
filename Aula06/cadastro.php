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
    <?php //Também é possível utilziar get ao invés de post, porém, o get mostra as informações na url, sendo menos seguro para senha por exemplo
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
            if (empty($nome) || empty($email) || empty($matricula) || empty($curso) || empty($telefone) || empty($endereco) || empty($cep) || empty($uf) || empty($chor) || empty($hcomp) || empty($cidade)){
                header("Location: falha.php"); //header redireciona para outra página
                exit;
            } else {
                header("Location: sucesso.php");
                exit;
            }
        } else {
            header("Location: agradecimentos.php");
            exit;
        }

        echo "<h1>Sucesso! Dados Recebidos: </h1>";
        echo "<p><strong>Nome: </strong>$nome</p>";
        echo "<p><strong>Mátricula: </strong>$matricula</p>";
        echo "<p><strong>Curso: </strong>$curso</p>";
        echo "<p><strong>E-mail: </strong>$email</p>";
        echo "<p><strong>Telefone: </strong>$telefone</p>";
        echo "<p><strong>Endereço: </strong>$endereco</p>";
        echo "<p><strong>CEP: </strong>$cep</p>";
        echo "<p><strong>Cidade: </strong>$cidade</p>";
        echo "<p><strong>UF: </strong>$uf</p>";
        echo "<p><strong>Horas Complementares: </strong>$hcomp</p>";
        echo "<p><strong>Carga Horária: </strong>$chor</p>";
    ?>
</body>
</html>

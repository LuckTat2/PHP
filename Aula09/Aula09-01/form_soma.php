<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício Funções</title>
</head>
<body>
    <h1>Teste de Funções</h1>
    <form name="formfunc" method="POST" action="">
        <label for="num1">Número 1:</label>
        <input type="number" name="num1" id="num1"><br>
       
        <label for="num2">Número 2:</label>
        <input type="number" name="num2" id="num2"><br>

        <input type="submit" name="enviar" value="Somar">
    </form>
    <?php
        //Verifica se o formulário foi enviado
        if (isset($_POST['enviar'])){
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];

            //Chamando a função somar (passando parametros $num1 e $num2)
            $result = somar($num1,$num2);
           
            echo "<p>A soma de $num1 e $num2 é igual a: $result</p>";
        }
        //Função que realiza a soma
        function somar($n1, $n2){
            $soma = $n1 + $n2;
            return $soma;
        }
    ?>
</body>
</html>

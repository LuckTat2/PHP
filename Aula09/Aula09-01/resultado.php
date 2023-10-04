<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h1>Resultado do Cálculo</h1>
    <?php
        //Incluindo o arquivo que possui as funções
        include "funcoes.php";

        //Verifica se os valores foram enviados pelo formulário
        if(isset($_POST['enviar'])){
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];

            //Chamando as funções
            switch ($_POST['opcao']){
                case 'soma':
                    $result = Somar($num1,$num2);
                    echo "O resultado da soma é: $result";
                    break;
                case 'subtracao':
                    $result = Subtrair($num1,$num2);
                    echo "O resultado da subtração é: $result";
                    break;
                case 'multiplicacao':
                    $result = Multiplicar($num1,$num2);
                    echo "O resultado da multiplicação é: $result";
                    break;
                case 'divisao':
                    $result = Dividir($num1,$num2);
                    echo "O resultado da divisão é: $result";
                    break;
                case 'potencia':
                    $result = Potencia($num1,$num2);
                    echo "O resultado da potenciação é: $result";
                    break;
            }
        } else {
            echo "Por favor, preencha o formulário e envie os valores.";
        }
    ?>
</body>
</html>

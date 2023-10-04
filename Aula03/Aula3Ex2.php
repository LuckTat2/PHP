<?php
$valor1 = 5;
$valor2 = 10;
$valor3 = 15;
$valor4 = 20;

echo "O valor da variável 1 é: ".$valor1."<br/>";
echo "O valor da variável 2 é: ".$valor2."<br/>";
echo "O valor da variável 3 é: ".$valor3."<br/>";
echo "O valor da variável 4 é: ".$valor4."<br/>";

$soma = $valor1 + $valor2;
echo "O resultado da soma entre 1 e 2 é: ".$soma."<br/>";
$subtracao = $valor3 - $valor2;
echo "O resultado da subtração entre 3 e 2 é: ".$subtracao."<br/>";
$divisao = $valor4 / $valor1;
echo "O resultado da divisão entre 4 e 1 é: ".$divisao."<br/>";
$multiplicacao = $valor1 * $valor2;
echo "O resultado da multiplicação entre 1 e 2 é: ".$multiplicacao."<br/>";
$resto = $valor2 % $valor1;
echo "O resultado do resto da divisão entre 2 e 1 é: ".$resto."<br/>";

$valor1 += 5;
$valor2 -= 5;
$valor3 /= 5;
$valor4 *= 5;

echo "O valor da variável 1 agora é: ".$valor1."<br/>";
echo "O valor da variável 2 agora é: ".$valor2."<br/>";
echo "O valor da variável 3 agora é: ".$valor3."<br/>";
echo "O valor da variável 4 agora é: ".$valor4."<br/>";


echo(pi())."<br/>"; //retorna pi
echo(min(1, 2, 3, 4, 5))."<br/>"; //retorna o menor valor
echo(max(1, 2, 3, 4, 5))."<br/>"; //retorna o maior valor
echo(abs(-6.7))."<br/>"; //retorna o valor absoluto (positivo) de um número
echo(sqrt(25))."<br/>"; //retorna a raiz quadrada
echo(round(0.60))."<br/>"; //arrendonda um valor float para o inteiro mais próximo
echo(round(0.49))."<br/>";
echo(rand())."<br/>"; //gera um valor aleatório
echo(rand(10, 100))."<br/>"; //gera um valor aleatório dentre os especificados (incluindo eles)
?>


<?php
$idade = 26;
$nome = "Lucas";
$sobrenome = " Silva de Souza";
$peso = 69.5;

echo $nome.$sobrenome." tem ".$idade." anos e ".$peso."kg.<br/>";

$temConta = true;
$possuiCartao = false;

echo "Tem conta? ".($temConta ? "Sim! " : "Não! ")."<br/>";
echo "Possui cartão? ".($possuiCartao ? "Sim! " : "Não! "."<br/>");

// Condicional if: (var ? "valor_verdadeiro" : "valor_falso");
$status = ($idade >= 18 ? "Maior de idade! " : "Menor de idade! "."<br/>");
echo $nome." é ".$status;

$cores = array("Vermelho","Verde","Azul","Rosa","Amarelo");
$numeros = [1, 2, 3, 4, 5];
$posicao = 1;

echo "A cor na posição ".$posicao." é: ".$cores[$posicao]."<br/>";
echo "O número na posição ".$posicao." é: ".$numeros[$posicao]."<br/>";
?>



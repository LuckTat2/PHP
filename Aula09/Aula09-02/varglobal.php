<?php
    $varGlobal = 100;

    function ExibirGlobal(){
        //Usa-se "global" para acessar uma varíavel global
        global $varGlobal;
        echo "Variável global é: ".$varGlobal."<p>";
    }

    ExibirGlobal(); //Chamando a função que exibe a variável global
   
    //função com variáveis locais
    function Calculos($n1,$n2){
        $soma = $n1 + $n2;
        $sub = $n1 - $n2;
        $mult = $n1 * $n2;
        $div = $n1 / $n2;
        $pot = $n1 ** $n2;
        echo "O resultado da soma entre $n1 e $n2 é: $soma <br>";
        echo "O resultado da subtração entre $n1 e $n2 é: $sub <br>";
        echo "O resultado da multiplicação entre $n1 e $n2 é: $mult <br>";
        echo "O resultado da divisão entre $n1 e $n2 é: $div <br>";
        echo "O resultado da potenciação entre $n1 e $n2 é: $pot <br>";
    }
   
    Calculos(6,2);

?>

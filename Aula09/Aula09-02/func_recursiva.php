<?php
    function CalcFatorial($n){
        if ($n <= 1){
            return 1; //Caso base: fatorial de 0 ou 1 é 1
        } else {
            //Chamada recursiva: fatorial de n é n multiplicado pelo fatorial de n-1
            return $n * CalcFatorial($n - 1);
        }
    }

    $num = 5; //Calcular o fatorial de 5
    $result = CalcFatorial($num);
    echo "<p>O fatorial de $num é: $result</p>"; //Saída: o fatorial de 5 é 120
?>
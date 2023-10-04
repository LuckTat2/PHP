<?php 
    function Fibonacci($n){
        $n = $_GET['number'];
        $ultimo = 1;    
        $penultimo = 0;

        echo "A sequência de Fibonacci com $n elementos é: <br/>";
        echo "0<br/>1<br/>";
        for ($count=1; $count<=$n-2;$count++){ //Desconta-se duas posições pois já temos duas posições inseridas inicialmente, 0 e 1
            $atual = $ultimo + $penultimo;
            echo $atual."<br/>";

            $penultimo = $ultimo;
            $ultimo = $atual;
        }
    }
?>
<?php
    $numeros = [1, 2, 3, 4, 5]; // Ou também pode ser feito $numeros = array(1, 2, 3, 4, 5)
    $numerosE = count($numeros);
        echo "O array tem ".$numerosE." elementos.</br>";
        echo "O elemento na posição 0 do array é ".$numeros[0]."</br>";
   
    $dados = ["nome" => "João", "idade" => 28];
        echo "Nome é: ".$dados["nome"]." e a Idade é: ".$dados["idade"];

        echo "<pre>";
        print_r($dados); //print_r é usado para exibição de arrays e objetos, porém é mais usado para depuração e estruturas complexas.
        echo "</pre>";

    $pessoa = array(
        "nome" => "Carlos",
        "idade" => 23,
        "cpf" => "025.369.245-89"
    );
        echo $pessoa["nome"]."</br>";
        echo $pessoa["idade"]."</br>";
        echo $pessoa["cpf"]."</br>";

    $letras = ["A","B","C"];
        for ($i = 0; $i < count($letras); $i++){
            echo $letras[$i]." </br>";
        }

    $numeros = [4, 9, 10, 15, 14];
        foreach ($numeros as $numero){
            echo $numero." </br>";
        }
       
    $array = ["PHP", "JS", "HTML"];
        foreach ($array as $lp){
        echo $lp." </br>";
    }
    $valor = "Python";
    array_push($array, $valor);
        foreach ($array as $lp){
            echo $lp." </br>";
        }

    $ultElemento = array_pop($array);
    echo $ultElemento."</br>";

    $array2 = ["Python", "Delphi", "Java"];
    $arrayCombinado = array_merge($array, $array2);
    for ($i = 0; $i < count($arrayCombinado); $i++){
        echo $arrayCombinado[$i]." </br>";
    }

    foreach ($dados as $key => $value){
        echo $key.":".$value."</br>";
    }

    $chaves = array_keys($dados);
    foreach ($chaves as $chave){
        echo "$chave</br>";
    }

    $matriz = [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]
    ];
    echo $matriz[1][2]; // Lembrando que os índices começam em 0, ou seja, a posição será correspondente a linha 2 e coluna 3.

    echo "<pre>";
        print_r($matriz);
    echo "</pre>";

    for ($i = 0; $i < count($matriz); $i++){
        for ($j = 0; $j < count($matriz); $j++){
            echo $matriz[$i][$j]." ";
        }
        echo "</br>";
    }
?>

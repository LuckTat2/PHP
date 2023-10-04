<?php
$diaSemana = "sexta";
switch ($diaSemana){
    case "segunda";
        echo "Hoje é segunda-feira!";
        break;
    case "terça";
        echo "Hoje é terça-feira!";
        break;
    case "quarta";
        echo "Hoje é quarta-feira";
        break;
    case "quinta";
        echo "Hoje é quinta-feira";
        break;
    case "sexta";
        echo "Sextou!<br>";
        break;
    default;
        echo "Dia inválido!";
}
$hora = 18;
switch (true){
    case ($hora >= 6 && $hora > 12);
        echo "Bom dia!";
        break;
    case ($hora >= 12 && $hora < 18);
        echo "Boa tarde!";
        break;
    default;
        echo "Boa noite!";
}
?>


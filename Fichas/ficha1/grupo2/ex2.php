<?php

$diaSemana = rand(1,7);

switch($diaSemana){
    case 1:
        echo "O valor". $diaSemana. " corresponde a segunda-feira";
        break;
    case 2:
        echo "O valor". $diaSemana. " corresponde a terca-feira";
        break;
    case 3:
        echo "O valor". $diaSemana. " corresponde a quarta-feira";
        break;
    case 4:
        echo "O valor". $diaSemana. " corresponde a quinta-feira";
        break;
    case 5:
        echo "O valor". $diaSemana. " corresponde a sexta-feira";
        break;
    case 6:
        echo "O valor". $diaSemana. " corresponde a sabado";
        break;
    case 7:
        echo "O valor". $diaSemana. " corresponde a domingo";
        break;
    default:
        echo "valor invalido";
}

?>
<?php

function devolverSomaDivisores($numero){
    $soma = 0; $perfeito = false;
        for($i=1; $i<$numero; $i++){
            if($numero % $i == 0){
                $soma += $i;
                
            }
        }

       

    
    return $soma;
}


$numero = 6;
$resultado = devolverSomaDivisores($numero);
 if($resultado == $numero){
                    echo "$numero é um número perfeito";
                    $perfeito = true;
                }
                else{
                    echo "$numero não é um número perfeito";
                    $perfeito = false;
                }
echo "<br>A soma dos divisores de $numero é: $resultado";

/*Mostar numeros perfeitos de 1 a 3000*/
for($i=1; $i<=3000; $i++){
    $resultado = devolverSomaDivisores($i);
    if($resultado == $i){
        echo "<br>$i é um número perfeito";
    }
}

?>
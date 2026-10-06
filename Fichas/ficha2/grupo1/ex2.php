<?php

echo"<br>EXERCICIO 2<br><br>";

function trocar($a,$b)
{
    echo "Recebi em A=$a e em B=$b.";

    $aux =$a;
    $a = $b;
    $b = $aux;

    echo "<br>Depois de trocar A=$a e B=$b.";
}
trocar(5,7);

?>
<?php

function TriangluFloyd($numero){
    for($i=1; $i<=$numero; $i++){
        for($j=1; $j<=$i; $j++){
            echo $i . " ";
        }
        echo "<br>";
    }
}

$numero = 1;
TriangluFloyd($numero);
?>
<?php

$n = rand(1, 99);

while(!($n >=10 && $n <= 30)){
    echo $n. "<br>";
    $n = rand(1, 99);
}

echo "A geração terminou aqui";
?>
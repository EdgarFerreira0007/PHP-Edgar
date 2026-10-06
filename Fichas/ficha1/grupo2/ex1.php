<?php

$ano = 2024;

if($ano %4 == 0 && $ano %100 != 0 || $ano %400 == 0){
    echo "O ano ".$ano." e bissexto";
}else{
    echo "O ano ".$ano." nao e bissexto";
}

?>
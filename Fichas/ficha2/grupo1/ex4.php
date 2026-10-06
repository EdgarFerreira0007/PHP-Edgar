<?php

function testarNumeroPrimo($numero){
    if($numero <=1){
        return false;
    }

    for($i=2; $i <= sqrt($numero); $i++){
        if($numero % $i == 0){
            return false;
        }
    }
    return true;
}

$n = 14;
if(testarNumeroPrimo($n)){
    echo "$n é primo";
}else{
    echo "$n não é primo";
}
?>
<?php

$vetor = array(1,2,3,4,5,6,7);

echo "O valor minimo e: ".min($vetor)."<br>";
$media = array_sum($vetor)/count($vetor);
echo "A media e: ".$media. "<br>";

$som_positivos= 0;
$som_negativos= 0;

foreach($vetor as $vet){
    if($vet >=0){
    $som_positivos += $vet;
    }else{
    $som_negativos += $vet;
    }
}

echo "A soma dos valores positivos e: ".$som_positivos."<br>";
echo "A soma dos valores negativos e: ".$som_negativos."<br>";

?>
<?php

$tempos = array("Cavalo1"=>"13", "Cavalo2"=>"12", "Cavalo3"=>"11", "Cavalo4"=>"10", "Cavalo5"=>"9", "Cavalo6"=>"8", "Cavalo7"=>"7", "Cavalo8"=>"6", "Cavalo9"=>"5", "Cavalo10"=>"4");
/*$menorTempo = min($tempos);
foreach($tempos as $cavalo => $tempo) {
    if($tempo == $menorTempo) {
        echo "O cavalo com o menor tempo é: $cavalo com um tempo de $tempo segundos<br>";
    }
}*/

asort($tempos);
/*echo "O cavalo com o menor tempo é: " . key($tempos) . " com um tempo de " . current($tempos) . " segundos<br>";*/
$a = 1;
foreach($tempos as $cavalo=> $tempo){
    if($a == 1){
    echo "O cavalo com o menor tempo é: $cavalo com um tempo de $tempo segundos<br>";
    break;
    }
}
?>
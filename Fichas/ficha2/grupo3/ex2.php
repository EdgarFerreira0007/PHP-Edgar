<?php
$totoloto = array();
while(count($totoloto) < 6) {
    $numero = rand(1,50);
    if(!in_array($numero, $totoloto)) {
        $totoloto[] = $numero;
    }
}
echo "Os numeros do totoloto sao: " . implode(", ", $totoloto);

?>
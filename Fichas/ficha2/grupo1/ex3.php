<?php

function resolverEquacaoSegundoGrau($a, $b, $c) {
    $delta = $b * $b - 4 * $a * $c;

    if ($delta < 0) {
        return "A equação não tem raízes reais.";
    } else {
        $raiz1 = (-$b + sqrt($delta)) / (2 * $a);
        $raiz2 = (-$b - sqrt($delta)) / (2 * $a);
        return array($raiz1, $raiz2);
    }
}

$resultado = resolverEquacaoSegundoGrau(1, -3, 2);
if (is_array($resultado)) {
    echo "As raízes da equação são: " . implode(", ", $resultado);
} else {
    echo $resultado;
}

?>
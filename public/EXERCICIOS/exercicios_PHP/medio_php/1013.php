<?php
$valores = readline("");
$arrayValores = explode(" ", $valores);

$a = $arrayValores[0];
$b = $arrayValores[1];
$c = $arrayValores[2];

$maior = max($a, $b, $c);

echo $maior . " eh o maior". "\n";
?>
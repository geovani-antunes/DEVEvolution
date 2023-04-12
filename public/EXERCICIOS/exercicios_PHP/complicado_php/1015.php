<?php
$p1 = readline("Digite as coordenadas do ponto P1 (x1 y1): ");
list($x1, $y1) = explode(" ", $p1);

$p2 = readline("Digite as coordenadas do ponto P2 (x2 y2): ");
list($x2, $y2) = explode(" ", $p2);

$distancia = sqrt(($x2 - $x1) ** 2 + ($y2 - $y1) ** 2);

echo number_format($distancia, 4, ".", "") . "\n";
?>

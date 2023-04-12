<?php
$valores = readline("Digite três valores com ponto flutuante de dupla precisão separados por espaço: ");
list($a, $b, $c) = explode(" ", $valores);

$triangulo = ($a * $c) / 2;
$circulo = 3.14159 * ($c ** 2);
$trapezio = (($a + $b) * $c) / 2;
$quadrado = $b ** 2;
$retangulo = $a * $b;

echo "TRIANGULO: " . number_format($triangulo, 3, ".", "") . "\n";
echo "CIRCULO: " . number_format($circulo, 3, ".", "") . "\n";
echo "TRAPEZIO: " . number_format($trapezio, 3, ".", "") . "\n";
echo "QUADRADO: " . number_format($quadrado, 3, ".", "") . "\n";
echo "RETANGULO: " . number_format($retangulo, 3, ".", "") . "\n";
?>
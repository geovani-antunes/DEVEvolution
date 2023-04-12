<?php

require_once 'retangulo.php';
require_once 'circulo.php';

$retangulo = new Retangulo(4, 5);
echo "Área do retângulo: " . $retangulo->calcularArea() . PHP_EOL;
echo "Perímetro do retângulo: " . $retangulo->calcularPerimetro() . PHP_EOL;

$circulo = new Circulo(5);
echo "Área do círculo: " . $circulo->calcularArea() . PHP_EOL;
echo "Perímetro do círculo: " . $circulo->calcularPerimetro() . PHP_EOL;

?>

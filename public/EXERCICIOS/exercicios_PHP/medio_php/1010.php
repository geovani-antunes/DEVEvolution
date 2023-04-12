<?php
$product1 = explode(" ", fgets(STDIN)); $product2 = explode(" ", fgets(STDIN));

$value = number_format(($product1[1] * $product1[2]) + ($product2[1] * $product2[2]), 2, '.', '');

echo "VALOR A PAGAR: R$ $value" . PHP_EOL;
?>
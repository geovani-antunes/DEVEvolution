<?php

$valor = (int) readline(); // Lê o valor inteiro

echo $valor . "\n";

$notas = [100, 50, 20, 10, 5, 2, 1]; // Define as notas disponíveis

foreach ($notas as $nota) {
    $quantidade = (int) ($valor / $nota);
    $valor %= $nota; // Atualiza o valor restante
    echo $quantidade . " nota(s) de R$ " . $nota . ",00" . "\n";
}

?>

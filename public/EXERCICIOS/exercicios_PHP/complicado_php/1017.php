<?php
$tempo = (int) readline("Digite o tempo gasto na viagem (em horas): ");
$velocidade = (int) readline("Digite a velocidade média durante a viagem (em km/h): ");

$distancia = $tempo * $velocidade;
$litros = $distancia / 12;

echo number_format($litros, 3, ".", "") . "\n";
?>

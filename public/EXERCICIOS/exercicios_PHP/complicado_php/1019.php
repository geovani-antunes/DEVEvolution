<?php
$tempo_segundos = (int) readline("Digite o tempo de duração do evento em segundos: ");

$horas = 0;
$minutos = 0;
$segundos = 0;

while ($tempo_segundos >= 3600) {
    $horas++;
    $tempo_segundos -= 3600;
}

while ($tempo_segundos >= 60) {
    $minutos++;
    $tempo_segundos -= 60;
}

$segundos = $tempo_segundos;

echo "$horas:$minutos:$segundos" . "\n";
?>

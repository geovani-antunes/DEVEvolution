<?php

// Lê o valor inteiro correspondente à idade em dias
$idade_em_dias = intval(fgets(STDIN));

// Inicializa as variáveis
$anos = 0;
$meses = 0;
$dias = 0;

// Calcula os anos completos
while ($idade_em_dias >= 365) {
    $anos++;
    $idade_em_dias -= 365;
}

// Calcula os meses completos
while ($idade_em_dias >= 30) {
    $meses++;
    $idade_em_dias -= 30;
}

// A quantidade restante de dias é a quantidade de dias
$dias = $idade_em_dias;

// Imprime o resultado
echo "$anos ano(s)\n";
echo "$meses mes(es)\n";
echo "$dias dia(s)\n";

?>
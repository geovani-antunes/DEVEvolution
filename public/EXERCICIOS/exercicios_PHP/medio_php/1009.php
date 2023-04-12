<?php
$nome = fgets(STDIN);
$salario = floatval(fgets(STDIN));
$vendas = floatval(fgets(STDIN));

$total = $salario + ($vendas *0.15);
$teste = number_format($total,2,".","");

echo "TOTAL = R$ " . $teste . "\n";
?>
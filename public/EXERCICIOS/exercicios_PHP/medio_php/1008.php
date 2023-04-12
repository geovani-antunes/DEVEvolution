<?php

$n_funcionario = fgets(STDIN);
$horas = fgets(STDIN);
$valor = fgets(STDIN);

$salario = $horas * $valor;
$teste = number_format($salario,2,'.','');

echo "NUMBER = $n_funcionario";
echo "SALARY = U$ $teste" ."\n";
?>
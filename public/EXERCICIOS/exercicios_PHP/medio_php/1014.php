<?php
$distancia = floatval(fgets(STDIN));
$combustivel = floatval(fgets(STDIN));

$consumoMedio = $distancia / $combustivel;
$teste = number_format($consumoMedio,3,".","");

echo $teste . " km/l". "\n";

?>
<?php

$a = floatval(fgets(STDIN));
$b = floatval(fgets(STDIN));

$média = ((3.5*$a)+(7.5*$b))/11;

echo "MEDIA = ".number_format($média,5,".","")."\n";
?>
<?php

$a = floatval(fgets(STDIN));
$b = floatval(fgets(STDIN));
$c = floatval(fgets(STDIN));


$média = ((2*$a)+(3*$b)+(5*$c))/10;

echo "MEDIA = ".number_format($média,1,".","")."\n";
?>
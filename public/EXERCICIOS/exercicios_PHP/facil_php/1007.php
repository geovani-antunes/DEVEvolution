<?php
$a = trim(fgets(STDIN));
$b = trim(fgets(STDIN));
$c = trim(fgets(STDIN));
$d = trim(fgets(STDIN));

$DIFERENCA = ($a*$b-$c*$d);

echo "DIFERENCA = " . $DIFERENCA . "\n";

?>
<?php

require_once 'gato.php';
require_once 'cachorro.php';

$dog = new cachorro(10,10,4,"Preto");
$dog->emitirSom(). PHP_EOL;

$cat = new gato(1,5,4,"Branco");
$cat->emitirSom();


print_r($dog);
print_r($cat);



?>
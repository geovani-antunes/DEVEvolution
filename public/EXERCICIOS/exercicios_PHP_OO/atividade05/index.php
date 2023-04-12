<?php

require_once 'carro.php';

$carro1 = new carro("Chevrolet", 2018, "LT",50);
$carro1->acelerar();
$carro1->getVelocidadeAtual();

print_r($carro1);


?>
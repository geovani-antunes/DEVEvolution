<?php
require_once "calculo.php";

class circulo implements FormaGeometrica {
    private $raio;
    
    public function __construct($raio) {
        $this->raio = $raio;
    }
    
    public function calcularArea() {
        return pi() * pow($this->raio, 2);
    }
    
    public function calcularPerimetro() {
        return 2 * pi() * $this->raio;
    }
}


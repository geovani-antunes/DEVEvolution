<?php
require_once "calculo.php";

class retangulo implements FormaGeometrica {
    private $base;
    private $altura;
    
    public function __construct($base, $altura) {
        $this->base = $base;
        $this->altura = $altura;
    }
    
    public function calcularArea() {
        return $this->base * $this->altura;
    }
    
    public function calcularPerimetro() {
        return 2 * ($this->base + $this->altura);
    }
}

?>
<?php

require_once 'animal.php';

class gato extends animal{
    private $corPeloGato;

    public function __construct($peso, $idade, $membros, $corPeloGato) {
        $this->peso = $peso;
        $this->idade = $idade;
        $this->membros = $membros;
        $this->corPeloGato = $corPeloGato;

    }



    function locomover()
    {
        echo"<p>Caminhando";

    }

    function alimentar()
    {
        echo"<p>Mamando";

    }

    function emitirSom()
    {
        echo"<p>Som de gato (miau)".PHP_EOL;

    }


    public function getCorPeloGato()
    {
        return $this->corPena;
    }


    public function setCorPeloGato($corPeloGato)
    {
        $this->corPeloGato = $corPeloGato;
    }

}
?>
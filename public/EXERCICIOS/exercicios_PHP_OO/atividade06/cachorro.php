<?php

require_once 'animal.php';
class cachorro extends animal {
    private $corPelo;

    public function __construct($peso, $idade, $membros, $corPelo) {
        $this->peso = $peso;
        $this->idade = $idade;
        $this->membros = $membros;
        $this->corPelo = $corPelo;


    }

    function locomover()
    {
        echo "<p>Correndo</p>";

    }

    function alimentar()
    {
        echo "<p>Mamando</p>";
    }

    function emitirSom()
    {
        echo "<p>Som de cachorro (au au )</p>";

    }

    public function getCorPelo()
    {
        return $this->corPelo;
    }

    public function setCorPelo($corPelo)
    {
        $this->corPelo = $corPelo;
    }


}
?>
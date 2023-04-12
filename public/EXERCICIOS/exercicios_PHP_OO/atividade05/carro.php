<?php

class carro {
    private $marca;
    private $modelo;
    private $ano;
    private $velocidadeAtual;

    public function __construct($marca, $modelo, $ano, $velocidadeAtual) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->velocidadeAtual = $velocidadeAtual;

    }


    public function getMarca()
    {
        return $this->marca;
    }


    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

    public function getModelo()
    {
        return $this->modelo;
    }


    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }

    public function getAno()
    {
        return $this->ano;
    }

    public function setAno($ano)
    {
        $this->ano = $ano;

        return $this;
    }

    public function getVelocidadeAtual()
    {
        return $this->velocidadeAtual;
    }

    public function setVelocidadeAtual($velocidadeAtual)
    {
        $this->velocidadeAtual = $velocidadeAtual;

        return $this;
    }

    public function acelerar(){
        echo "Velocidade Atual: ".$this->getVelocidadeAtual(). PHP_EOL;
        echo "====== Aumentando velocidade do veiculo======". PHP_EOL;
        echo "=============== Aguarde ===============" . PHP_EOL;

        echo "====== Velocidade Aumentada com sucesso :)======". PHP_EOL;

        
    } 


    

} 
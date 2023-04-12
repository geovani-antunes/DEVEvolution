<?php
require_once 'pessoa.php';
class funcionario extends pessoa {
    private $matricula;
    private $salario;



    public function getMatricula()
    {
        return $this->matricula;
    }


    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;

        return $this;
    }


    public function getSalario()
    {
        return $this->salario;
    }


    public function setSalario($salario)
    {
        $this->salario = $salario;

        return $this;
    }
}


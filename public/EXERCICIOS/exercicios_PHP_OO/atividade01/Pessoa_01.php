<?php

class Pessoa_01
{
    public $nome;
    public $idade;
    public $sexo;

    public function __construct($nome, $idade, $sexo){
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome): void
    {
        $this->nome = $nome;
    }
    public function getIdade()
    {
        return $this->idade;
    }

    public function setIdade($idade): void
    {
        $this->idade = $idade;
    }

    public function getSexo()
    {
        return $this->sexo;
    }

    public function setSexo($sexo): void
    {
        $this->sexo = $sexo;
    }
    





}
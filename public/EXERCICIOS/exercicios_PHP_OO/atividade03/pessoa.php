<?php
abstract class pessoa{
    protected $nome;
    protected $idade;
    protected $sexo;

    public final function fazerAniversario(){
        $this->idade ++;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    public function getIdade()
    {
        return $this->idade;
    }


    public function setIdade($idade): self
    {
        $this->idade = $idade;

        return $this;
    }

    public function getSexo()
    {
        return $this->sexo;
    }

    public function setSexo($sexo): self
    {
        $this->sexo = $sexo;

        return $this;
    }
}
?>
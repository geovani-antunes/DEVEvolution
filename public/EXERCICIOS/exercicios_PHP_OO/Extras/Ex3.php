<?php

class Funcionario
{
    private $nome;
    private $rg;
    protected $salarioBase;

    public function __construct($nome, $rg, $salarioBase)
    {
        $this->nome = $nome;
        $this->rg = $rg;
        $this->salarioBase = $salarioBase;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getRg()
    {
        return $this->rg;
    }

    public function setRg($rg)
    {
        $this->rg = $rg;
    }

    public function getSalarioBase()
    {
        return $this->salarioBase;
    }

    public function setSalarioBase($salarioBase)
    {
        $this->salarioBase = $salarioBase;
    }
}

// classe Vendedor
class Vendedor extends Funcionario
{
    private $totalVendas;

    public function __construct($nome, $rg, $salarioBase)
    {
        parent::__construct($nome, $rg, $salarioBase);
        $this->totalVendas = 0;
    }

    public function getTotalVendas()
    {
        return $this->totalVendas;
    }

    public function setTotalVendas($totalVendas)
    {
        $this->totalVendas = $totalVendas;
    }

    public function acumularVendas($valorVendas)
    {
        $this->totalVendas += $valorVendas;
    }

    public function calcularSalario()
    {
        $salarioTotal = $this->salarioBase + ($this->totalVendas * 0.05);
        $this->totalVendas = 0;
        return $salarioTotal;
    }
}

// classe Administrativo
class Administrativo extends Funcionario
{
    private $horasExtras;

    public function __construct($nome, $rg, $salarioBase)
    {
        parent::__construct($nome, $rg, $salarioBase);
        $this->horasExtras = 0;
    }

    public function getHorasExtras()
    {
        return $this->horasExtras;
    }

    public function setHorasExtras($horasExtras)
    {
        $this->horasExtras = $horasExtras;
    }

    public function acumularHorasExtras($qtdHoras)
    {
        $this->horasExtras += $qtdHoras;
    }

    public function calcularSalario()
    {
        $valorHorasExtras = $this->horasExtras * ($this->salarioBase / 100);
        $salarioTotal = $this->salarioBase + $valorHorasExtras;
        $this->horasExtras = 0;
        return $salarioTotal;
    }
}

$vendedor = new Vendedor("João", "123456789", 2000);
$vendedor->acumularVendas(1500);
$vendedor->acumularVendas(3000);
echo "Vendedor " . $vendedor->getNome() . " tem salário de R$ " . $vendedor->calcularSalario() . "\n";

$administrativo = new Administrativo("Maria", "987654321", 2500);
$administrativo->acumularHorasExtras(10);
$administrativo->acumularHorasExtras(20);
echo "Vendedor " . $administrativo->getNome() . " tem salário de R$ " . $administrativo->calcularSalario() . "\n";

<?php

class Colaborador {
    private $primeiroNome;
    private $sobrenome;
    private $salarioMensal;

    public function __construct($primeiroNome, $sobrenome, $salarioMensal) {
        $this->primeiroNome = $primeiroNome;
        $this->sobrenome = $sobrenome;
        $this->salarioMensal = $salarioMensal;
    }

    public function getPrimeiroNome() {
        return $this->primeiroNome;
    }

    public function setPrimeiroNome($primeiroNome) {
        $this->primeiroNome = $primeiroNome;
    }

    public function getSobrenome() {
        return $this->sobrenome;
    }

    public function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }

    public function getSalarioMensal() {
        return $this->salarioMensal;
    }

    public function setSalarioMensal($salarioMensal) {
        $this->salarioMensal = $salarioMensal;
    }

    public function getSalarioAnual() {
        return $this->salarioMensal * 12;
    }

    public function oferecerAumento($porcentagem) {
        $novoSalario = $this->salarioMensal * (1 + ($porcentagem / 100));
        $this->salarioMensal = $novoSalario;
    }
}

$colaborador = new Colaborador("Janine", "Milena", 3500);
echo "Salário anual: " . $colaborador->getSalarioAnual() . "\n"; // Saída: Salário anual: 60000
$colaborador->oferecerAumento(10);
echo "Novo salário mensal: " . $colaborador->getSalarioMensal() . "\n"; // Saída: Novo salário mensal: 5500


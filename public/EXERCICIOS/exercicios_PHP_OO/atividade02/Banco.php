<?php

class Banco
{
    public $numconta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

//Metodo Construtor
    public function  __construct(){
        $this->saldo = 0;
        $this->status = false;
        echo "<p>Conta Criada com sucesso</p>";
    }

// Variavel Numconta
    public function getNumConta(){
        return $this->numconta;
    }
    public function setNumConta($n){
        $this->numconta = $n;
    }
// Variavel Tipo
    public function getTipo(){
        return $this->tipo;
    }
    public function setTipo($t){
        $this->tipo = $t;
    }

// Variavel Dono
    public function getDono(){
        return $this->dono;
    }
    public function setdono($d){
        $this->dono = $d;
    }
//Variavel Saldo
    public function getSaldo(){
        return $this->saldo;
    }
    public function setSaldo($sal){
        $this->saldo = $sal;
    }
//Variavel Status
    public function getStatus(){
        return $this->status;
    }
    public function setStatus($sta){
        $this->status = $sta;
    }
//Metodo Abrir Conta
    public function abrirConta($t){
        $this->setTipo($t);
        $this->setStatus(true);
        if ($t == "CC") {
            $this->setSaldo(50);
        }
        elseif ($t == "CP"){
            $this->setSaldo(150);
        }
}

//metodo fechar conta
    public function fecharConta(){
        if ($this->getSaldo() > 0){
            echo "A conta possui dinheiro no valor de R$". $this->saldo;
        }
        elseif ($this->getSaldo() < 0){
            echo "Consta Debito ativo nesta conta";
        } else {
            $this->setStatus(false);

        }
}
 //metodo depositar
    public function depositar($v){
    if ($this->getStatus()){
        $this->setSaldo($this->getSaldo()+$v);
    }
    else
        echo "<p>Impossivel depositar</p>";
    }

// metodo sacar
    public function sacar($v){
    if ($this->getStatus()) {
        if ($this->getSaldo() >= $v) {
            $this->setSaldo($this->getSaldo() - $v);
        } else {
            echo "Saldo Insuficiente para saque";
        }
    } else {
           echo "Nao posso sacar de uma conta fechada";
        }
    }

    public function pagarMensal(){
    if ($this->tipo == "CC"){
        $v = 12;
    }
    else ($this->tipo="CP");{
        $v = 20;
    }
    if($this->status=true){
        if ($this->saldo >$v){
            $this->saldo = $this->saldo - $v;
        }
    }
    else {
        echo "Saldo Insuficiente, impossivel pagar";
    }

    }

}

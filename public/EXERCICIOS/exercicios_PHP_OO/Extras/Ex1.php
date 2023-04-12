<?php

class Pedido
{
    private $numero;
    private $descricao;
    private $quantidade;
    private $precoUnitario;

    public function __construct($numero, $descricao, $quantidade, $precoUnitario)
    {
        $this->numero = $numero;
        $this->descricao = $descricao;
        $this->quantidade = $quantidade;
        $this->precoUnitario = $precoUnitario;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;
    }

    public function getQuantidade()
    {
        return $this->quantidade;
    }

    public function setPrecoUnitario($precoUnitario)
    {
        $this->precoUnitario = $precoUnitario;
    }

    public function getPrecoUnitario()
    {
        return $this->precoUnitario;
    }

    public function calcularValorTotal()
    {
        return $this->quantidade * $this->precoUnitario;
    }

    public function exibirInformacoes() {
        echo "Número: " . $this->numero . "\n";
        echo "Descrição: " . $this->descricao . "\n";
        echo "Quantidade: " . $this->quantidade . "\n";
        echo "Preço Unitário: " . $this->precoUnitario . "\n";
        echo "Valor Total: " . $this->calcularValorTotal() . "\n";
    }
}

$pedido = new Pedido('', '', '', '');
$pedido->setNumero(1);
$pedido->setDescricao('Caneta tinteiro');
$pedido->setQuantidade(3);
$pedido->setPrecoUnitario(100.00);
$valorTotal = $pedido->calcularValorTotal();
$pedido->exibirInformacoes();


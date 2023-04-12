
<?php
class Pilha {
    private $dados = array();

    public function push($elemento) {
        array_push($this->dados, $elemento);
    }

    public function pop() {
        if ($this->isEmpty()) {
            throw new Exception("A pilha está vazia");
        } else {
            return array_pop($this->dados);
        }
    }

    public function isEmpty() {
        return empty($this->dados);
    }

    public function size() {
        return count($this->dados);
    }

    public function imprimir() {
        echo "<pre>";
        print_r($this->dados);
        echo "</pre>";
    }
}

$pilha = new Pilha();
$pilha->push(10);
$pilha->push(20);
$pilha->push(30);
$pilha->imprimir();
echo $pilha->pop();
$pilha->imprimir();
echo $pilha->pop();
$pilha->imprimir();

?>
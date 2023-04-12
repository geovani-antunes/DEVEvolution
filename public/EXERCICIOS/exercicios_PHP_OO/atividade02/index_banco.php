
<pre>
<?php
require_once "Banco.php";

$p1 = new Banco(); // jubileu
$p2 = new Banco(); // creuza

$p1->abrirConta("CC");
$p1->setdono("Jubileu");
$p1->setNumConta(123456);
$p1->depositar(300);
$p1->pagarMensal();
$p2->abrirConta("CP");
$p2->setdono("Creuza");
$p2->setNumConta(654321);
$p2->depositar(500);
$p2->pagarMensal();
$p2->sacar(630);
$p2->fecharConta();
$p2->depositar(50);
$p2->getSaldo();


print_r($p1);
print_r($p2);


?>
    </pre>

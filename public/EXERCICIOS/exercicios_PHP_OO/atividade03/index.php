<pre>
<?php
require_once 'funcionario.php';

$pessoa = new funcionario();
$pessoa ->setNome("Geovani");
$pessoa ->setIdade(18);
$pessoa ->setSexo("Masculino");
$pessoa ->setMatricula("01");
$pessoa ->setSalario(1500,00);



print_r($pessoa);


?>
</pre>
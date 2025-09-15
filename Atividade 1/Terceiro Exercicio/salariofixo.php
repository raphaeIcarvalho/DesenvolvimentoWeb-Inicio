<?php

    $salario = $_REQUEST['salario'];
    $vendas = $_REQUEST['vendas'];
    $salarioTotal = $salario + ($vendas * 0.04);

    echo "<h3>Salário Total Mensal: R$ $salarioTotal</h3>";

?>
<?php

    $custo = $_POST['custo'];

    echo "Custo: $custo<br>";
    
    if ($custo == 39999.99) {
        $preco = $custo * 1.05;
        $imposto = $preco * 0.10;
    } elseif ($custo > 39999.99 && $custo <= 69999.99) {
        $preco = $custo * 1.10;
        $imposto = $preco * 0.15;
    }
    elseif ($custo > 69999.99) {
        $preco = $custo * 1.15;
        $imposto = $preco * 0.20;
    } else {
        $preco = 0;
        $imposto = 0;
        echo "Valor de custo inválido.<br>";
    }

    echo "Preço: $preco<br>";
    echo "Imposto: $imposto<br>";
?>
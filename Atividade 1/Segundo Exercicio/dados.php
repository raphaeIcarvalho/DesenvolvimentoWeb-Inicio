<?php

    $nome = $_POST['nome'];
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];

    echo "Nome: $nome<br>";
    echo "Nota 1: $nota1<br>";
    echo "Nota 2: $nota2<br>";

    if ($nota1 + $nota2 < 6) {
        echo "Reprovado";
    } elseif ($nota1 + $nota2 >= 6) {
        echo "Aprovado com nota 1: $nota1 e nota 2: $nota2";
    } elseif ($nota1 + $nota2 >= 6) {
        echo "Aprovado com nota 1: $nota1 e nota 2: $nota2";
    } else {
        echo "Aprovado com nota 1: $nota1 e nota 2: $nota2";
    }

?>
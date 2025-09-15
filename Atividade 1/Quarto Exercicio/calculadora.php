<?php

    $baseMaior = $_REQUEST['base_maior'];
    $baseMenor = $_REQUEST['base_menor'];
    $altura = $_REQUEST['altura'];

    $areaTrapezio = (($baseMaior + $baseMenor) * $altura) / 2;

    echo "<h2>Área do Trapézio:</h2> <i>$areaTrapezio</i>";

?>
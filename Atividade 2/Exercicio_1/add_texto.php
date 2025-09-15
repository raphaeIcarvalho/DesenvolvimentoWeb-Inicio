<?php

    $frase = $_REQUEST['frase'];

    $arquivo = fopen("arquivo.txt", "a"); // a = append

    fwrite($arquivo, "$frase\n");

    fclose($arquivo);

    echo "Frase adicionada com sucesso: $frase <br>";
    echo "<a href='form_texto.html'>Voltar</a>";

?>
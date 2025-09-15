<?php 

    $arquivo = fopen("arquivo.txt", "a"); // w = write

    if ($arquivo) {
        fwrite($arquivo, "Olá mundo! \n");
        fclose($arquivo);
        echo "Arquivo criado e escrito com sucesso!";
    } else {
        echo "Erro ao abrir o arquivo";
    }

?>
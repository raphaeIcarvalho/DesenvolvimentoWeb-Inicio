<?php
// Declarando a função
function calculaTabuada($numero) { 
    if ($numero > 0 && $numero < 10) {
        echo "Tabuada de $numero:";
        for($i = 1; $i <= 10; $i++){
            $total = $i * $numero;
            echo "<br> $i * $numero = $total <br>";
        }
    } else {
        echo "O número precisa ser entre 0 e 10.";
    }
}
// Executando a função
$numero = $_REQUEST['numero'];
calculaTabuada($numero);
// Lendo o número do arquivo
$arquivo = fopen("arquivo.txt", "a"); // a = append

    fwrite($arquivo, "$numero\n");

    fclose($arquivo);
echo "<br><br>Valores salvos no arquivo:<br>";
$arquivo = fopen("arquivo.txt", "r");
while (($linha = fgets($arquivo)) !== false) {
    echo htmlspecialchars($linha) . "<br>";
}
fclose($arquivo);
?>


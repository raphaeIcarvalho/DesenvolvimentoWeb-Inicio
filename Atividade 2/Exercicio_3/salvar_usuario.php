<?php

    $arquivo_json = 'usuarios.json';

    // 1. Receber os dados do formulário via método POST.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
    
    if (file_exists($arquivo_json)) {
        $conteudo_json = file_get_contents($arquivo_json);
        $usuarios = json_decode($conteudo_json, true);

        // Trata o caso de arquivo corrompido ou vazio.
        if ($usuarios === null || !is_array($usuarios)) {
            $usuarios = [];
        }
    } else {
        // Se o arquivo não existir, inicializa um array vazio.
        $usuarios = [];
    }
    $novo_id = count($usuarios) + 1; // ID simples
    $novo_usuario = [
        'id' => $novo_id,
        'nome' => $nome,
        'email' => $email
    ];
    $usuarios[] = $novo_usuario;
    $novo_conteudo_json = json_encode($usuarios, JSON_PRETTY_PRINT);

    if (file_put_contents($arquivo_json, $novo_conteudo_json)) {
        echo "Usuário cadastrado com sucesso!";
    } else {
        echo "Erro ao salvar o usuário.";
    }
} else {
    echo "Método de requisição inválido.";
}
header("Location: lista_usuarios.php");
?>
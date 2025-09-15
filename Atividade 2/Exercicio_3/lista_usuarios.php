<?php

$arquivo_json = "usuarios.json";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuarios = file_exists($arquivo_json) ? 
    json_decode(file_get_contents($arquivo_json), true) : [];
    if ($usuarios) {
        echo "<h2>Lista de Usuários Cadastrados:</h2><ul>";
        foreach ($usuarios as $usuario) {
            echo "<li>Usuário: " . htmlspecialchars($usuario['id']) . 
            " - Nome: " . htmlspecialchars($usuario['nome']) . 
            " - Email: " . htmlspecialchars($usuario['email']) . "</li>";
        }
        echo "</ul>";
    } else {
        echo "Nenhum usuário cadastrado.";
    }
} else {
    echo '<form method="POST"><button type="submit">Listar Usuários</button>
    </form>';
}
?>

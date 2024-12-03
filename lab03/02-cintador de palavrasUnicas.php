<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe a entrada do usuário
    $entrada = $_POST['entrada'];

    // Converte a string para minúsculas e divide em palavras
    $palavras = explode(" ", strtolower($entrada));

    // Remove palavras duplicadas usando array_unique
    $palavras_unicas = array_unique($palavras);

    // Exibe a quantidade de palavras únicas
    echo count($palavras_unicas) . " palavras únicas.";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contar Palavras Únicas</title>
    </style>
</head>
<body>
    </style>
    <h1>Contar Palavras Únicas</h1>
    <form method="POST">
        <label for="entrada">Digite a frase:</label>
        <input type="text" id="entrada" name="entrada" required>
        <button type="submit">Contar palavras únicas</button>
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST['numero'];
    $soma = 0;
    $i = 1; // Inicializa o contador

    // Laço do-while para percorrer os números de 1 até o número fornecido
    do {
        if ($i % 2 == 0) { // Verifica se o número é par
            $soma += $i; // Soma os números pares
        }
        $i++; // Incrementa o contador
    } while ($i <= $numero); // Continua até o número fornecido

    echo "<p>Soma dos números pares de 1 até $numero: $soma</p>";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma de Números Pares</title>
</head>
<body>
    <h1>Soma de Números Pares</h1>
    <form method="POST">
        <label for="numero">Digite um número inteiro positivo:</label>
        <input type="number" name="numero" id="numero" required min="1">
        <input type="submit" value="Calcular">
    </form>
</body>
</html>

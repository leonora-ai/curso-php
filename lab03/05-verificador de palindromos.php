<?php
function ehPalindromo($entrada) {
    $limpo = preg_replace('/[^a-z0-9]/i', '', strtolower($entrada));
    return $limpo === strrev($limpo) ? "É um palíndromo!" : "Não é um palíndromo!";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador de Palíndromos</title>
</head>
<body>
    <h1>Verifique se uma palavra ou frase é um palíndromo</h1>
    <form method="post">
        <label for="entrada">Digite uma palavra ou frase:</label>
        <input type="text" id="entrada" name="entrada" required>
        <button type="submit">Verificar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['entrada'])) {
        $entrada = $_POST['entrada'];
        echo "<h2>Resultado:</h2>";
        echo "<p><strong>" . htmlspecialchars(ehPalindromo($entrada)) . "</strong></p>";
    }
    ?>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $numero = $_POST['numero'] ?? null;
    $base = $_POST['base'] ?? null;

    function converterBase($numero, $base) {
        $bases = ['binario' => 2, 'octal' => 8, 'hexadecimal' => 16];
        return isset($bases[$base]) ? base_convert($numero, 10, $bases[$base]) : "Base inválida!";
    }

    if (is_numeric($numero) && $base) {
        $resultado = converterBase($numero, $base);
    } else {
        $resultado = "Insira um número válido e escolha uma base.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Base</title>
</head>
<body>
    <h1>Conversor de Base</h1>
    <form method="post">
        <label for="numero">Número Decimal:</label>
        <input type="number" id="numero" name="numero" required>
        <br><br>
        <label for="base">Escolha a Base:</label>
        <select id="base" name="base" required>
            <option value="binario">Binário</option>
            <option value="octal">Octal</option>
            <option value="hexadecimal">Hexadecimal</option>
        </select>
        <br><br>
        <button type="submit">Converter</button>
    </form>

    <?php if (isset($resultado)): ?>
        <h2>Resultado:</h2>
        <p><?= htmlspecialchars($resultado) ?></p>
    <?php endif; ?>
</body>
</html>

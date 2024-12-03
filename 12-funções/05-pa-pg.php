<?php
// Função para calcular as progressões
function calcularProgressao($inicial, $razao, $tipo, $termos = 10) {
    $result = [];
    for ($i = 0; $i < $termos; $i++) {
        // Verifica se é PA ou PG e calcula de acordo
        $result[] = $tipo == 'PA' ? $inicial + $i * $razao : $inicial * pow($razao, $i);
    }
    return implode(' → ', $result); // Retorna os resultados formatados
}

$paResult = $pgResult = ''; // Inicializa as variáveis para armazenar os resultados
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST['numero']; // Número inicial
    $razao = $_POST['razao']; // Razão
    $termos = isset($_POST['termos']) ? $_POST['termos'] : 10; // Número de termos (padrão 10)

    // Calcula as progressões com o número de termos fornecido
    $paResult = calcularProgressao($numero, $razao, 'PA', $termos);
    $pgResult = calcularProgressao($numero, $razao, 'PG', $termos);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Progressões Aritmética e Geométrica</title>
    <style>
        body { font-family: pink, sans-serif; background: pink; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .container { background-color: pink; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); width: 300px; text-align: center; }
        h1 { color: red; }
        input { width: 100%; padding: 10px; margin: 10px 0; border-radius: 5px; border: 1px solid #ddd; }
        .result { background-color: red; padding: 10px; border-radius: 5px; margin-top: 20px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Progressões Aritmética e Geométrica</h1>
        <form method="POST">
            <input type="number" name="numero" placeholder="Número inicial" required>
            <input type="number" name="razao" placeholder="Razão" required>
            <input type="number" name="termos" placeholder="Número de termos" required>
            <input type="submit" value="Calcular">
        </form>

        <?php if ($paResult && $pgResult): ?>
            <div class="result">
                <p><strong>PA:</strong> <?php echo $paResult; ?></p>
                <p><strong>PG:</strong> <?php echo $pgResult; ?></p>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>


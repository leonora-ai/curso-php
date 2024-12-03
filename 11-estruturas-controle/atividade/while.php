<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operacao = $_POST['operacao'];
    
    switch ($operacao) {
        case '+': $resultado = $num1 + $num2; break;
        case '-': $resultado = $num1 - $num2; break;
        case '*': $resultado = $num1 * $num2; break;
        case '/': 
            $resultado = $num2 == 0 ? 'Erro: Divisão por zero' : $num1 / $num2; 
            break;
        default: $resultado = 'Operação inválida';
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
    <style>
        body { font-family: Arial, sans-serif; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; background: #f4f4f9; }
        .container { background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); width: 300px; }
        input, select, button { width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ddd; border-radius: 5px; }
        h1 { text-align: center; color: #4CAF50; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Calculadora</h1>
        <form method="POST">
            <input type="number" name="num1" placeholder="Primeiro número" required>
            <input type="number" name="num2" placeholder="Segundo número" required>
            <select name="operacao" required>
                <option value="+">Soma (+)</option>
                <option value="-">Subtração (-)</option>
                <option value="*">Multiplicação (*)</option>
                <option value="/">Divisão (/)</option>
            </select>
            <button type="submit">Calcular</button>
        </form>

        <?php if (isset($resultado)): ?>
            <p><strong>Resultado:</strong> <?php echo $resultado; ?></p>
        <?php endif; ?>
    </div>
</body>
</html>

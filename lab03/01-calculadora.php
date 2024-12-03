
<?php
// Função que verifica se um número é primo
function isPrimo($numero) {
    if ($numero <= 1) {
        return false; // Números menores ou iguais a 1 não são primos
    }

    // Verifica se o número é divisível por algum número de 2 até a raiz quadrada do número
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false; // Se for divisível, não é primo
        }
    }
    
    return true; // Se não for divisível por nenhum número, é primo
}

// Inicializando a variável para armazenar a mensagem do resultado
$resultado = '';

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST['numero']; // Número inserido pelo usuário
    $resultado = "O número $numero " . (isPrimo($numero) ? "é primo" : "não é primo") . "."; // Verifica se o número é primo
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>este numero é Primo?</title>
    <style>
        body { font-family: Arial, sans-serif; background-color:black; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .container { background-color: purple;  padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); width: 300px; text-align: center; }
        h1 { color: white; }
        input { width: 100%; padding: 10px; margin: 10px 0; border-radius: 5px; border: 1px solid #ddd; }
        .result { background-color: #f0f0f0; padding: 10px; border-radius: 5px; margin-top: 20px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>este número é primo?</h1>
        <form method="POST">
            <input type="number" name="numero" placeholder="Digite um número" required>
            <input type="submit" value="Verificar">
        </form>

        <?php if ($resultado): ?>
            <div class="result">
                <p><strong><?php echo $resultado; ?></strong></p>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>

































?>
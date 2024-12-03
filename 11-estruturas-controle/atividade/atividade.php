<?php
// Inicializando variáveis para armazenar as idades e classificações
$idades = [];
$classificacoes = [];

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Laço para coletar as idades e classificações
    for ($i = 1; $i <= 5; $i++) {
        // Captura a idade enviada via POST
        $idade = $_POST["idade$i"];
        
        // Classificação da idade
        if ($idade >= 0 && $idade <= 12) {
            $classificacao = "Criança";
        } elseif ($idade >= 13 && $idade <= 17) {
            $classificacao = "Adolescente";
        } elseif ($idade >= 18 && $idade <= 59) {
            $classificacao = "Adulto";
        } else {
            $classificacao = "Idoso";
        }

        // Armazena as idades e classificações
        $idades[] = $idade;
        $classificacoes[] = $classificacao;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classificação de Idade</title>
</head>
<body>
    <h1>Classificação de Idade</h1>

    <form method="POST">
        <!-- Coletando as idades -->
        <?php for ($i = 1; $i <= 5; $i++): ?>
            <label for="idade<?php echo $i; ?>">Idade da Pessoa <?php echo $i; ?>:</label>
            <input type="number" id="idade<?php echo $i; ?>" name="idade<?php echo $i; ?>" required><br><br>
        <?php endfor; ?>

        <input type="submit" value="Classificar">
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <h2>Resultado da Classificação:</h2>
        <ul>
            <?php for ($i = 0; $i < 5; $i++): ?>
                <li>Idade: <?php echo $idades[$i]; ?> - Classificação: <?php echo $classificacoes[$i]; ?></li>
            <?php endfor; ?>
        </ul>
    <?php endif; ?>
</body>
</html>


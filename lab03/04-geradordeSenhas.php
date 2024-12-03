<?php
// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $length = isset($_POST['length']) ? (int)$_POST['length'] : 8;
    $include_uppercase = isset($_POST['include_uppercase']);
    $include_lowercase = isset($_POST['include_lowercase']);
    $include_numbers = isset($_POST['include_numbers']);
    $include_special = isset($_POST['include_special']);

    // Função para gerar a senha
    function generatePassword($length, $include_uppercase, $include_lowercase, $include_numbers, $include_special) {
        $characterSets = [
            'uppercase' => "ABCDEFGHIJKLMNOPQRSTUVWXYZ",
            'lowercase' => "abcdefghijklmnopqrstuvwxyz",
            'numbers' => "0123456789",
            'special' => "!@#$%^&*()-_+=<>?"
        ];

        $characters = '';
        $characters .= $include_uppercase ? $characterSets['uppercase'] : '';
        $characters .= $include_lowercase ? $characterSets['lowercase'] : '';
        $characters .= $include_numbers ? $characterSets['numbers'] : '';
        $characters .= $include_special ? $characterSets['special'] : '';

        if (!$characters) return "Selecione pelo menos uma opção para gerar a senha.";

        $password = '';
        for ($i = 0; $i < $length; $i++) {
            $password .= $characters[random_int(0, strlen($characters) - 1)];
        }

        return $password;
    }

    // Gera a senha
    $password = generatePassword($length, $include_uppercase, $include_lowercase, $include_numbers, $include_special);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Senhas Fortes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        label, input, button {
            width: 100%;
            margin-bottom: 10px;
        }
        button {
            padding: 10px;
            border: none;
            border-radius: 4px;
            background: #007BFF;
            color: white;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background: #0056b3;
        }
        .output {
            margin-top: 20px;
            padding: 10px;
            background: #e9ecef;
            border-radius: 4px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Gerador de Senhas Fortes</h1>
        <form method="post">
            <label for="length">Comprimento da senha:</label>
            <input type="number" id="length" name="length" value="8" min="4" required>

            <input type="checkbox" id="include_uppercase" name="include_uppercase" checked>
            <label for="include_uppercase">Incluir letras maiúsculas</label>

            <input type="checkbox" id="include_lowercase" name="include_lowercase" checked>
            <label for="include_lowercase">Incluir letras minúsculas</label>

            <input type="checkbox" id="include_numbers" name="include_numbers" checked>
            <label for="include_numbers">Incluir números</label>

            <input type="checkbox" id="include_special" name="include_special" checked>
            <label for="include_special">Incluir caracteres especiais</label>

            <button type="submit">Gerar Senha</button>
        </form>

        <?php if (isset($password)): ?>
            <div class="output">
                <strong>Senha Gerada:</strong>
                <p><?= htmlspecialchars($password) ?></p>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>

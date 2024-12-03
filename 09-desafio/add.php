<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $sexo = $_POST['sexo'];
    $bairro = $_POST['bairro'];

    $conn->query("INSERT INTO clientes (nome, email, sexo, bairro) VALUES ('$nome', '$email', '$sexo', '$bairro')");
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Cliente</title>
    <style>
        /* Resetando algumas propriedades padrão */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Estilo geral da página */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding: 20px;
        }

        /* Container para centralizar o formulário */
        form {
            background-color: #fff;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        /* Título do formulário */
        h1 {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
            color: #4A90E2;
        }

        /* Estilo dos rótulos dos campos */
        label {
            font-size: 16px;
            margin-bottom: 8px;
            display: block;
            color: #333;
        }

        /* Estilo dos inputs e selects */
        input[type="text"],
        input[type="email"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            background-color: #fafafa;
        }

        /* Estilo do botão */
        button[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #4A90E2;
            color: #fff;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button[type="submit"]:hover {
            background-color: #357ABD;
        }

        /* Estilos para o foco dos campos */
        input[type="text"]:focus,
        input[type="email"]:focus,
        select:focus {
            border-color: #4A90E2;
            outline: none;
        }

        /* Adicionando um pouco de espaçamento entre os campos */
        form label, form input, form select, form button {
            margin-bottom: 15px;
        }

        /* Mensagem de erro (caso precise) */
        .error-message {
            color: red;
            font-size: 14px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Adicionar Novo Cliente</h1>
    <form method="post" onsubmit="return validarFormulario()">
        <label>Nome:</label>
        <input type="text" name="nome" required>

        <label>Email:</label>
        <input type="email" name="email" required>

        <label>Sexo:</label>
        <select name="sexo" required>
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>
        </select>

        <label>Bairro:</label>
        <input type="text" name="bairro" required>

        <button type="submit">Salvar</button>
    </form>
</body>
</html>
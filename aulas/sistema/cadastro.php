<?php
session_start();

if((!isset($_SESSION['id'])) and (!isset($_SESSION['nome'])) and (!isset($_SESSION['email']))){
    unset(
        $_SESSION['id'],
        $_SESSION['nome'],
        $_SESSION['email']
    );
    header('location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 400px;
            margin: 30px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
        }
        input[type="text"], input[type="email"], input[type="password"] {
            width: 95%;
            padding: 8px;
            margin: 5px 0 10px;
            border-radius: 5px;
            border: 1px solid #aaa;
        }
        .senha-container {
            position: relative;
        }
        .toggle-senha {
            position: absolute;
            right: 10px;
            top: 8px;
            cursor: pointer;
        }
        #msg-senha {
            font-size: 0.9em;
            margin-bottom: 10px;
        }
        button {
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: white;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Cadastrar novo Administrador</h1>

    <form action="cadastro_adm.php" method="post" onsubmit="return validarSenhas()">
        <label for="nome_adm">Nome:</label><br>
        <input type="text" name="nome_adm" id="nome_adm" required><br>

        <label for="email_adm">Email:</label><br>
        <input type="email" name="email_adm" id="email_adm" required><br>

        <label for="senha_adm">Senha:</label><br>
        <div class="senha-container">
            <input type="password" name="senha_adm" id="senha_adm" required>
            <span class="toggle-senha" onclick="toggleSenha('senha_adm', this)">👁️</span>
        </div>

        <label for="confirma_senha">Confirmar Senha:</label><br>
        <div class="senha-container">
            <input type="password" name="confirma_senha" id="confirma_senha" required>
            <span class="toggle-senha" onclick="toggleSenha('confirma_senha', this)">👁️</span>
        </div>

        <div id="msg-senha"></div>

        <button type="submit">Cadastrar</button>
    </form>

    <script>
        function toggleSenha(id, elemento) {
            const campo = document.getElementById(id);
            if (campo.type === "password") {
                campo.type = "text";
                elemento.textContent = "🙈";
            } else {
                campo.type = "password";
                elemento.textContent = "👁️";
            }
        }

        function validarSenhas() {
            const senha = document.getElementById("senha_adm").value;
            const confirma = document.getElementById("confirma_senha").value;
            const msg = document.getElementById("msg-senha");

            if (senha !== confirma) {
                msg.style.color = "red";
                msg.textContent = "❌ As senhas não coincidem!";
                return false;
            } else {
                msg.style.color = "green";
                msg.textContent = "✅ Senhas conferem!";
                return true;
            }
        }

        // Atualiza a mensagem enquanto o usuário digita
        document.getElementById("confirma_senha").addEventListener("keyup", validarSenhas);
    </script>
</body>
</html>
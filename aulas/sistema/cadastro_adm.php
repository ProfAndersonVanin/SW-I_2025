<?php
    session_start();    
    include_once 'conexao.php';
    
    $nome = $_POST['nome_adm'];
    $email = $_POST['email_adm'];
    $senha = md5($_POST['confirma_senha']);

    
    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senha);
    if ($stmt->execute()) {
        echo "Usuário cadastrado com sucesso!";
        // Aqui podemos criar uma lógica para:
        // - mostrar uma modal de confirmação
        // - Deslogar e fazer com que o usuário seja direcionado a tela de login
    } else {
        echo "Erro ao cadastrar usuário.";
        // - Informar tipo de erro
    }
?>
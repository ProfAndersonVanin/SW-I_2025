<?php
    $host = 'localhost';
    $dbname = 'loja';
    $user = 'root';
    $pass = '';

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        // Habilita erros do PDO
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conexão bem-sucedida!<hr>";
    } catch (PDOException $e) {
        echo "Erro na conexão: " . $e->getMessage();
    }
?>
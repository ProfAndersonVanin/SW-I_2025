<?php
    session_start();

    if( (!isset($_SESSION['id'])) and (!isset($_SESSION['nome'])) and (!isset($_SESSION['email'])) ){
        unset(
            $_SESSION['id'],
            $_SESSION['nome'],
            $_SESSION['email']

        );
        header('location: index.php');
    }


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAINEL DE CONTROLE</title>
</head>
<body>
    <h1>VOCÊ ESTÁ EM UMA ÁREA RESTRITA!</h1>
    <p>Bem vindo FULANO DE TAL</p>

 
    <button>
        <a href="logout.php">SAIR</a>
    </button>
</body>
</html>
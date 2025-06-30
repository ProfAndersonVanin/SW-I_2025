<?php
    include_once 'Login.class.php';

    $nome_usuario = $_POST['usuario'];
    $senha_usuario = $_POST['senha'];

    $user = new Login($nome_usuario,$senha_usuario);

    $user->Validar();


?>
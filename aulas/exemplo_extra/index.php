<?php
    if(isset($_GET['status'])){
        $logado = $_GET['status'];
        if($logado == 0){
            echo "
                <script>
                    alert('Faça Login para acessar a página solicitada!');
                </script>        
            ";
        }
    }    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Tela Inicial de Login</title>
</head>
<body>
    <h1>TELA DE AUTENTICAÇÃO</h1>
    <form action="processa_login.php" method="POST">
        <input type="text" name="usuario" placeholder="Insira o nome de usuário" id="">
        <input type="password" name="senha" placeholder="Insira a sua senha" id="">
        <input type="submit" value="ENTRAR">
    </form>
</body>
</html>
<?php
    $logado = $_GET['status'];
    if($logado != 1){
        header('Location: index.php?status=0');
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Restrita</title>
</head>
<body>
    <h1>Página Restrita</h1>
</body>
</html>
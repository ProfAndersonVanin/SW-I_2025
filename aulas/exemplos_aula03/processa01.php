<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Processa arquivos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="alert alert-primary" role="alert">
                <h3>AULA 03 - SW-I - TRABALHANDO COM FORMULÁRIOS HTML E PHP</h3>
                <p>Abaixo o resultado dos dados vindos da página que tem o Formulário</p>
            </div>
        </div>
        <div class="row">          
            <div class="card">
                <div class="card-header">
                    Resultado Final
                </div>
                <div class="card-body">
                    <h5 class="card-title">Recebendo os dados</h5>
                    <?php
                        $nome = $_POST['cxnome'];                        
                    ?>
                    <p class="card-text"><?php echo "Bem vindo, $nome"; ?></p>
                    <a href="exemplo01.html" class="btn btn-primary">Voltar</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>






<?php
    require 'conexao.php';

    $sql = "SELECT * FROM produtos";
    $stmt = $pdo->query($sql);

    while ($produto = $stmt->fetchAll(PDO::FETCH_ASSOC)) {
        //PDO::FETCH_ASSOC --> faz com que seja retornado um array associativo
        //que será relacionado a variável $produto. Os índices deste array
        //associativo serão os nomes dos campos da tabela do banco de dados

        //Ver diferenças no uso de:
        //  fetch(PDO::FETCH_ASSOC)
        //  fetchAll(PDO::FETCH_ASSOC)


        echo "<pre>";
        print_r($produto[0]);        
        // echo "ID: " . $produto['id'] . "<br>";
        // echo "Nome: " . $produto['nome'] . "<br>";
        // echo "Preço: R$" . $produto['preco'] . "<br>";
        // echo "Estoque: " . $produto['estoque'] . "<br><br>";
    }
?>
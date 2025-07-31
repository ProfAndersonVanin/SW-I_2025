<?php
    require 'conexao.php';

    $id = 1;
    $novoPreco = 149.99;

    $sql = "UPDATE produtos SET preco = :preco WHERE id = :id";
    
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':preco', $novoPreco);
    $stmt->bindParam(':id', $id);

    if ($stmt->execute()) {
        echo "Produto atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar produto.";
    }
?>
<?php
    include_once 'Produto.class.php';

    $n = $_POST['nome'];
    $p = (float)$_POST['preco'];
    $q = (int)$_POST['qtd'];

    $produto = new Produto($n,$p,$q);

    //print_r($produto);

    $produto->AdicionarEstoque(5);
    $produto->RemoverEstoque(3);

    $produto->MostrarDetalhes();


?>
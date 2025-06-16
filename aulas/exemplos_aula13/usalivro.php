<?php
    include_once 'Livro.class.php';
    $livro = new Livro('Diva','José de Alencar',true);

    // echo "<pre>";
    // print_r($livro);
    // echo "</pre>";
    echo "Exibindo o status do Livro <br>";
    echo $livro->ExibirStatus();
    echo "<hr>";
    echo "Fazendo um empréstimo <br>";
    $livro->Emprestar();
    echo "<hr>";
    echo "Exibindo o status do Livro <br>";
    echo $livro->ExibirStatus();
    echo "<hr>";
    echo "Fazendo uma devolução <br>";
    $livro->Devolver();
    echo "<hr>";
    echo "Exibindo o status do Livro <br>";
    echo $livro->ExibirStatus();
    echo "<hr>";


?>
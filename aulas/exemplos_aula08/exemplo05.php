<?php
    // Criando um array indexado
    $cores = ["vermelho", "verde", "azul"];

    // Contando o número de elementos 
    $qtde = count($cores);

    echo "Existem $qtde elementos no array <br>"; 
    //Output: Existem 3 elementos no array

    echo "<hr>";

    for ($i=0; $i < $qtde ; $i++) { 
        echo "Cor: $cores[$i] <br>";
    }

?>
<?php
    require_once 'Carro.class.php';

    $meuCarro = new Carro("Toyota", 2023, 4);
    echo $meuCarro->ExibirDetalhesCarro();

    // Exemplo adicional: criando outro carro
    $outroCarro = new Carro("Honda", 2021, 2);
    echo $outroCarro->ExibirDetalhesCarro();
?>
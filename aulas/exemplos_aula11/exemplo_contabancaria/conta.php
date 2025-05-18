<?php
    include_once 'Conta.class.php';
    $conta = new ContaBancaria("João", 1000);
    $conta->depositar(500);
    $conta->sacar(200);
    echo "Titular: " . $conta->getTitular() . "\n";
    echo "Saldo: R$" . $conta->getSaldo() . "\n";

?>
<?php
    // INSERE A CLASSE CRIADA - LAMPADA
    include_once 'Lampada.class.php';

    // INSTANCIA DE UM NOVO OBJETO DA CLASSE LAMPADA
    $lamp1 = new Lampada;
    $lamp2 = new Lampada;

    // ATRIBUINDO NOVOS VALORES PARA O OBJETO CRIADO
    $lamp1->Fabricante = "Philips";
    $lamp1->Tensao = 110;
    $lamp1->Potencia = 25;
    $lamp1->Cor = "Branca";

    $lamp2->Fabricante = "OuroLux";
    $lamp2->Tensao = 110;
    $lamp2->Potencia = 50;
    $lamp2->Cor = "Azul";

    // CHAMANDO O MÉTODO PARA LIGAR A LAMPADA
    $lamp1->Ligar();
    $lamp2->Desligar();

    // CHAMANDO O MÉTODO QUE MOSTRA OS DETALHES INSTANCIADOS NESTE OBJETO
    $lamp1->ListaDetalhes();
    $lamp2->ListaDetalhes();
?>
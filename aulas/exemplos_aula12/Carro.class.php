<?php
    // Classe filha de Veiculo
    require_once 'Veiculo.class.php';

    class Carro extends Veiculo {
        private $NumeroPortas;

        public function __construct($marca, $ano, $numeroPortas) {
            parent::__construct($marca, $ano);
            $this->NumeroPortas = $numeroPortas;
        }

        public function ExibirDetalhesCarro() {
            return $this->ExibirDetalhes() . "<br> Número de portas: $this->NumeroPortas";
        }
    }
?>
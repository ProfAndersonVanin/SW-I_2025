<?php
    // Classe pai
    class Veiculo {
        protected $Marca;
        protected $Ano;

        public function __construct($marca, $ano) {
            $this->Marca = $marca;
            $this->Ano = $ano;
        }

        public function ExibirDetalhes() {
            return "<br> Marca: $this->Marca <br> Ano: $this->Ano";
        }
    }
?>
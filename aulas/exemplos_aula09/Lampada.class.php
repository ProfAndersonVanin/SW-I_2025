<?php
    class Lampada{

        // ATRIBUTOS DA LAMPADA
        public $Fabricante;
        public $Tensao;
        public $Potencia;
        public $Cor;
        public $Status;

        // MÉTODOS DA LAMPADA
        public function Ligar(){
            // AÇÕES A SEREM EXECUTADAS PARA LIGAR A LAMPADA...
            //echo "A LÂMPADA ESTÁ LIGADA AGORA! <br>";
            $this->Status = 1;
        }
        public function Desligar(){
            // AÇÕES A SEREM EXECUTADAS PARA DESLIGAR A LAMPADA...
            //echo "VOCÊ DESLIGOU A LÂMPADA! <br>";
            $this->Status = 0;
        }
        public function ListaDetalhes(){
            echo "Fabricante: ".$this->Fabricante."<br>";
            echo "Tensão de Alimentação (V): ".$this->Tensao."<br>";
            echo "Potência (W): ".$this->Potencia."<br>";
            echo "Cor: ".$this->Cor."<br>";
            if($this->Status == 1){
                echo "Status da Lâmpada: LIGADA <br>";
            }else{
                echo "Status da Lâmpada: DESLIGADA <br>";
            }
        }
    }
?>
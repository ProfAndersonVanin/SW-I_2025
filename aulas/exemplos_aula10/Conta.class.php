<?php
    class Conta{
        public $Nome;
        public $Cpf;
        private $Saldo;

        public function Sacar($valor){
            if($this->Saldo<$valor){
                return "Saldo Insuficiente";
            }else{
                $this->Saldo = $this->Saldo - $valor;
                $texto = "Saque Realizado. Saldo atual é de R$ " . $this->Saldo;            
                return $texto;
            }
            


            return $this->Saldo;
        }
        public function Depositar($valor){
            $this->Saldo += $valor;
            $texto = "Deposito Realizado. Saldo atual é de R$ " . $this->Saldo;            
            return $texto;
        }
        public function MostrarSaldo(){
            echo "Nome do cliente: " . $this->Nome . "<br>";
            echo "CPF do cliente: " . $this->Cpf . "<br>";
            echo "Saldo disponível: R$ " . $this->Saldo . "<br>";
        }
    }
?>
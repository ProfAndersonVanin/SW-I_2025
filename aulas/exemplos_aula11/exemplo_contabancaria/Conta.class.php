<?php
    class ContaBancaria {
        private $Titular;
        private $Saldo;

        // Construtor para iniciar titular e saldo inicial
        public function __construct($titular, $saldoInicial = 0) {
            $this->Titular = $titular;
            $this->Saldo = $saldoInicial;
        }

        // Getters
        public function getTitular() {
            return $this->Titular;
        }

        public function getSaldo() {
            return $this->Saldo;
        }

        // Métodos de operação
        public function Depositar($valor) {
            if ($valor > 0) {
                $this->Saldo += $valor;
            }
        }

        public function Sacar($valor) {
            if ($valor > 0 && $valor <= $this->Saldo) {
                $this->Saldo -= $valor;
            } else {
                echo "Saque não autorizado.\n";
            }
        }
    }
?>
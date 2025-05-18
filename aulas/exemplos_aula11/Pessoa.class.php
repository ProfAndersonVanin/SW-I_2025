<?php
    class Pessoa {
        private $Nome;

        public function __construct($nome_recebido) {
            $this->Nome = $nome_recebido;
        }

        public function Apresentar() {
            echo "Olá, meu nome é {$this->Nome}!";
        }
}

?>
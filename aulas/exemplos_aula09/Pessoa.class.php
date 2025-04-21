<?php
    // DEFINIÇÃO DA CLASSE PESSOA
    class Pessoa{
        public $Nome;
        public $Peso;
        public $Altura;

        // MÉTODO DA CLASSE PESSOA (UMA AÇÃO QUE A CLASSE PODE EXECUTAR)
        public function MostraDadosPessoa(){
            echo "Nome da Pessoa: " . $this->Nome . "<br>";
            echo "Peso da Pessoa: " . $this->Peso . "<br>";
            echo "Altura da Pessoa: " . $this->Altura . "<br>";
        }
    }

    // INSTANCIANDO UM OBJETO DA CLASSE PESSOA
    $fulano = new Pessoa;

    // ATRIBUINDO VALORES AOS ATRIBUTOS DO OBJETO CRIADO
    $fulano->Nome = 'Fulano da Silva';
    $fulano->Peso = 85;
    $fulano->Altura = 1.83;

    // CHAMANDO UM MÉTODO DA CLASSE PESSOA
    $fulano->MostraDadosPessoa();
?>
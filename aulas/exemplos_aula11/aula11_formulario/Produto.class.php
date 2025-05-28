<?php
    class Produto{
        private $Nome;
        private $Preco;
        private $Quantidade;

        public function __construct($nome_prod,$preco_prod=0,$qtde_prod=0){
            $this->Nome = $nome_prod;
            $this->Preco = $preco_prod;
            $this->Quantidade = $qtde_prod;
        }

        public function getNome(){
            return $this->Nome;
        }
        public function getPreco(){
            return $this->Preco;
        }
        public function setNome($nome){
            $this->Nome = $nome;
        }
        public function setPreco($valor){
            if ($valor < 0 ){
                echo "VALOR NÃO PERMITIDO";
            }else{
                $this->Preco = $valor;
            }        
        }

        public function AdicionarEstoque($qtd){
            if ($qtd < 0 ){
                echo "VALOR NÃO PERMITIDO";
            }else{
                $this->Quantidade += $qtd;
            }
        }
        public function RemoverEstoque($qtd){
            if ($qtd > 0 && $qtd <= $this->Quantidade){
                $this->Quantidade -= $qtd;
            }else{
                echo "VALOR NÃO PERMITIDO";                
            }
        }
        public function MostrarDetalhes(){
            echo "NOME: {$this->getNome()} <br>";

            echo "PREÇO: R$ " . number_format($this->getPreco(),2,',','.') . "<br>";

            //echo "PREÇO: R$ {$this->getPreco()} <br>";
            echo "QTDE ESTOQUE: {$this->Quantidade} <br>";
        }
    }

?>
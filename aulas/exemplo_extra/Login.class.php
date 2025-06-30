<?php
    class Login{
        private $Usuario;
        private $Senha;
        private $Logado;

        public function __construct($nome_usuario,$senha_usuario){
            $this->Usuario = $nome_usuario;
            $this->Senha = $senha_usuario;
        }

        public function getUsuario(){
            return $this->Usuario;
        }
        public function getSenha(){
            return $this->Senha;
        }
        public function Validar(){
            $user = $this->getUsuario();
            $pass = $this->getSenha();

            if($user == "teste" && $pass="1234"){                
                $this->Logado = True;
                if($this->Logado){
                    $status = 1;
                }
                header('Location: restrita.php?status='.$status);
            }else{                
                $this->Logado = False;
                $status = 0;
                header('Location: index.php?status='.$status);
            }
        }
    }
?>
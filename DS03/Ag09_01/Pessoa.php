<?php
    class Pessoa{
        protected $nome;

        public function setNome($nome)// Método para definir o nome da pessoa
        {
            $this->nome = $nome;
        }
        public function getNome()// Método para obter o nome da pessoa
        {
            return $this->nome;
        }
    }
?> 
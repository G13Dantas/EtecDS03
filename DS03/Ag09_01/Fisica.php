<?php 

require_once 'Pessoa.php';
class Fisica extends Pessoa
{
    private $cpf;

// Método para definir o CPF da pessoa física
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

// Método para obter o CPF da pessoa física
    public function getCpf()
    {
        return $this->cpf;
    }
    
// Método para alterar o nome da pessoa física
    public function mudarNome()
    {
        $this->nome = "Protegido";
    }
}
?>
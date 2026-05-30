<?php 
require_once 'Pessoa.php';
class Juridica extends Pessoa
{
    private $cnpj; // Atributo para armazenar o CNPJ da pessoa jurídica

    public function setCnpj($cnpj) // Método para definir o CNPJ da pessoa jurídica
    {
        $this->cnpj = $cnpj;
    }
    public function getCnpj() // Método para obter o CNPJ da pessoa jurídica
    {
        return $this->cnpj;
    }
}
?>
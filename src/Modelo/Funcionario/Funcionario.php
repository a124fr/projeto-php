<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Pessoa;

abstract class Funcionario extends Pessoa
{ 
    private string $cargo;
    private float $salario;
    
    public function __construct(string $nome, CPF $cpf, string $cargo, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
        $this->salario = $salario;
    }
    
    public function getCargo()
    {
        return $this->cargo;
    }
    
    public function setNome(string $nome): void
    {
        $this->validarNomeTitular($nome);
        $this->nome = $nome;
    }
    
    public function receberAumento(float $valorAumento): void
    {
        if ($valorAumento < 0) {
            echo "Aumento deve ser positivo";
        }
        
        $this->salario += $valorAumento;
    }
    
    public function getSalario(): float
    {
        return $this->salario;    
    }
    
    public function calculaBonificacao(): float
    {
        return $this->salario * 0.1;
    }
}
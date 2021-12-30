<?php

namespace Alura\Banco\Modelo;

abstract class Pessoa
{
    protected CPF $cpf;
    private string $nome;
    
    public function __construct(string $nome, CPF $cpf)
    {
        $this->validarNomeTitular($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }
    
    public function getNome(): string
    {
        return $this->nome;
    }
    
    public function getCpf(): string
    {
        return $this->cpf->getNumero();
    }
    
    protected function validarNomeTitular(string $nome): void
    {
        if (strlen($nome) < 5)
        {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }
}


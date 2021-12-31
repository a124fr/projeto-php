<?php

namespace Alura\Banco\Modelo;

abstract class Pessoa
{
    use AcessoPropriedades;
    
    protected CPF $cpf;
    private string $nome;
    
    public function __construct(string $nome, CPF $cpf)
    {
        $this->validarNome($nome);
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
    
    // final -> não permite a sobrescrita do método nas classe filhas.
    protected final function validarNome(string $nome): void
    {
        if (strlen($nome) < 5)
        {
           throw new \InvalidArgumentException("Nome precisa ter pelo menos 5 caracteres");
            exit();
        }
    }
}


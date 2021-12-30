<?php

/**
 * class Endereco
 * @package Alura\Banco\Modelo
 * @property-read string $cidade
 * @property-read string $bairro
 * @property-read string $rua
 * @property-read string $numero
 */

namespace Alura\Banco\Modelo;

class Endereco 
{
    
    private string $cidade;
    private string $bairro;
    private string $rua;
    private string $numero; 
    
    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }
    
    public function getCidade(): string
    {
        return $this->cidade;
    }
    
    public function getBairro(): string
    {
        return $this->bairro;
    }
    
    public function getRua(): string
    {
        return $this->rua;
    }
    
    public function getNumero(): string
    {
        return $this->numero;
    }
    
    public function setNumero(string $numero): void
    {
        $this->numero = $numero;
    }
    
    public function __tostring(): string
    {
        return "{$this->rua}, {$this->numero}, {$this->bairro}, {$this->cidade}";
    }
    
    public function __get(string $nomeAtributo) 
    {
        $metodo = 'get'.ucfirst($nomeAtributo);        
        return $this->$metodo();
    }
    
    public function __set($nomeAtributo, $valor)
    {
        $metodo = 'set'.ucfirst($nomeAtributo); 
        
        if (method_exists($this, $metodo)) {
            $this->$metodo($valor);
        }
    }
}
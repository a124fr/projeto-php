<?php

namespace Alura\Banco\Modelo\Conta;

class Conta 
{
    private Titular $titular;
    private float $saldo;   
    private static int $numeroDeContas = 0;

    public function __construct(Titular $titular) 
    {   
        $this->titular = $titular;
        $this->saldo = 0;
        
        // Conta::$numeroDeContas++;
        self::$numeroDeContas++;
    }
    
    public function __destruct()
    {
        self::$numeroDeContas--;
    }
    
    public function getSaldo(): float
    {
      return $this->saldo;
    }
    
    public function getTitular(): Titular
    {
        return $this->titular;
    }
        
    public function sacar(float $valorASacar): void 
    {
        if ($valorASacar > $this->saldo) {
            echo "Saldo indisponível";
            return;
        } 
        
        $this->saldo -= $valorASacar;
    }
    
    public function depositar(float $valorADepositar): void 
    {
        if($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        }
        
        $this->saldo += $valorADepositar;
    }
    
    public function transferir($valorATransferir, Conta $contaDestino): void 
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível";
            return;
        } 
        
        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }
    
    public static function getNumeroDeContas(): int
    {
        // return static::$numeroDeContas; -> outra forma de chamar membros estáticos... obs: pesquisar.
        return self::$numeroDeContas;
    }
}

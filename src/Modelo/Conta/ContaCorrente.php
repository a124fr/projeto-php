<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Conta\Conta;

class ContaCorrente extends Conta 
{
    public function transferir($valorATransferir, Conta $contaDestino): void 
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível";
            return;
        } 
        
        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }

    protected function percentualTarifa(): float
    {
        return 0.07;
    }
}

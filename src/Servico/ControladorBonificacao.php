<?php

namespace Alura\Banco\Servico;

use Alura\Banco\Modelo\Funcionario\Funcionario;

class ControladorBonificacao
{
    private float $totalBonificacao = 0;
    
    public function adicionaBonificacao(Funcionario $funcionario)
    {
        $this->totalBonificacao += $funcionario->calculaBonificacao();
    }
    
    public function getTotal(): float
    {
        return $this->totalBonificacao;
    }
}


<?php

namespace Alura\Banco\Modelo\Funcionario;

class Desenvolvedor extends Funcionario
{    
    public function sobeDeNivel(): void
    {
        $this->receberAumento($this->getSalario() * 0.75);
    }
}


<?php

namespace  Alura\Banco\Servico;

use Alura\Banco\Modelo\Autenticavel;
use Alura\Banco\Modelo\Funcionario\Diretor;

class Autenticador
{
    public function tentarLogin(Autenticavel $autenticavel, string $senha): void
    {
        if ($autenticavel->podeAutenticar($senha)) {
            echo "OK. Usuário logado no sistema".PHP_EOL;
        } else {
            echo "Ops. Senha incoreta".PHP_EOL;
        }
    }
}
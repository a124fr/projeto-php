<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Funcionario;
use Alura\Banco\Servico\ControladorBonificacao;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Funcionario\Desenvolvedor;

$umFuncionario = new Desenvolvedor("Vinicius Mago", new CPF("123.456.789-10"), "Desenvolvedor", 1000);

$umFuncionario->sobeDeNivel();

$doisFuncionario = new Gerente("Patrícia Maria", new CPF("987.654.321-10"), "Gerente", 3000);

$umDiretor = new Diretor("Ana Pereira", new CPF("100.002.820-57"), "Diretor", 5000);

$controlador = new ControladorBonificacao();
$controlador->adicionaBonificacao($umFuncionario);
$controlador->adicionaBonificacao($doisFuncionario);
$controlador->adicionaBonificacao($umDiretor);

echo "Total de bonificação paga é: R\${$controlador->getTotal()}";

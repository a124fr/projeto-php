<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Desenvolvedor;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Funcionario\EditorVideo;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Servico\ControladorBonificacao;

$umFuncionario = new Desenvolvedor("Vinicius Mago", new CPF("123.456.789-10"), 1000);

$umFuncionario->sobeDeNivel();

$doisFuncionario = new Gerente("Patrícia Maria", new CPF("987.654.321-10"), "3000");

$umDiretor = new Diretor("Ana Pereira", new CPF("100.002.820-57"), 5000);


$umEditor = new EditorVideo("Paulo", new CPF("456.987.231-11"), 1500);

$controlador = new ControladorBonificacao();
$controlador->adicionaBonificacao($umFuncionario);
$controlador->adicionaBonificacao($doisFuncionario);
$controlador->adicionaBonificacao($umDiretor);
$controlador->adicionaBonificacao($umEditor);

// echo "Total de bonificação paga é: R\${$controlador->getTotal()}";







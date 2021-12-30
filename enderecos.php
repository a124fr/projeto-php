<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco("Petrópolis", "bairro qualquer", "minha rua", "71B");
$outroEndereco = new Endereco("Rio", "Centro", "um rua aí", "50");

echo $umEndereco.PHP_EOL;
echo $outroEndereco;
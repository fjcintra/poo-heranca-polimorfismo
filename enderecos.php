<?php

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Funcionario\Desenvolvedor;

require_once 'autoload.php';

$endereco = new Endereco('Petropolis',
    'bairro a',
    'rua b',
    '1234'
);

$outroEndereco = new Endereco('Rio',
    'bairro a',
    'rua y',
    '4321'
);

//echo $endereco . PHP_EOL;
//echo $outroEndereco . PHP_EOL;
//
//echo $endereco->rua;

$dev = new Desenvolvedor('Fabio', new CPF('123.456.789-10'), 1000);

echo $dev->salario;
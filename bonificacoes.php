<?php

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\{Desenvolvedor, Diretor, EditorVideo, Gerente};
use Alura\Banco\Service\ControladorDeBonificacoes;

require_once 'autoload.php';

$umFuncionario = new Desenvolvedor(
    'Fabio Cintra',
    new CPF('123.456.789-00'),
    1000
);


$umaFuncionaria = new Gerente(
    'Tamires Santos',
    new CPF('987.654.321-00'),
    3000
);

$umDiretor = new Diretor(
    'Cassiano Antunes',
    new CPF('534.456.123-43'),
    5000
);

$umEditor = new EditorVideo(
    'Paulo',
    new CPF('654.987.321-15'),
    1500
);

$umFuncionario->sobeDeNivel();
$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDiretor);
$controlador->adicionaBonificacaoDe($umEditor);
echo $controlador->recuperaTotal();
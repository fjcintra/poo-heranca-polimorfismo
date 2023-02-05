<?php

use Alura\Banco\Modelo\{Conta\ContaCorrente, Conta\ContaPoupanca, Conta\Conta, Conta\Titular, CPF, Endereco};

require_once 'autoload.php';

$conta = new ContaCorrente(
    new Titular(
        new CPF('123.456.789-10'),
        'Fabio Cintra',
        new Endereco('São Carlos', 'Bairro Teste', 'Rua Teste', '123456')
    )
);

$conta->deposita(500);
$conta->saca(100);

echo $conta->recuperaSaldo();
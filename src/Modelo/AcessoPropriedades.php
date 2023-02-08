<?php

namespace Alura\Banco\Modelo;

trait AcessoPropriedades
{
    public function __get(string $name)
    {
        // rua -> recuperaRua
        $metodo = 'recupera' . ucfirst($name);
        return $this->$metodo();
    }
}
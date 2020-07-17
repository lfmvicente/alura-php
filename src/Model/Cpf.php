<?php

declare(strict_types=1);

namespace Alura\Banco\Model;

class Cpf
{
    private $numero;

    public function __construct(string $numero)
    {
        $this->numero = $numero;
    }

    /**
     * @return string
     */
    public function getNumero(): string
    {
        return $this->numero;
    }
}

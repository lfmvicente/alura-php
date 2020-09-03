<?php

declare(strict_types=1);

namespace Alura\Banco\Model\Funcionario;

use Alura\Banco\Model\Cpf;
use Alura\Banco\Model\Pessoa;

abstract class Funcionario extends Pessoa
{
    private $salario;

    public function __construct(string $nome, Cpf $cpf, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->salario = $salario;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function recebeAumento(float $valor): void
    {
        if ($valor < 0) {
            echo 'Valor deve ser positivo';
        }

        $this->salario += $valor;
    }

    public function getSalario(): float
    {
        return $this->salario;
    }

    abstract public function calculaBonificacao(): float;
}

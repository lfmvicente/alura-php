<?php

declare(strict_types=1);

namespace Alura\Banco\Model\Funcionario;

use Alura\Banco\Model\Cpf;
use Alura\Banco\Model\Pessoa;

abstract class Funcionario extends Pessoa
{
    private $cargo;
    private $salario;

    public function __construct(string $nome, Cpf $cpf, string $cargo, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->salario = $salario;
        $this->cargo = $cargo;
    }

    /**
     * @return string
     */
    public function getCargo(): string
    {
        return $this->cargo;
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

    public function calculaBonificacao():float
    {
        return $this->salario * 0.1;
    }

    public function getSalario():float
    {
        return $this->salario;
    }
}

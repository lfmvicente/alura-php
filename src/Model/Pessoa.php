<?php

declare(strict_types=1);

namespace Alura\Banco\Model;

class Pessoa
{
    protected $nome;
    private $cpf;

    public function __construct(string $nome, Cpf $cpf)
    {
        $this->cpf = $cpf;
        $this->nome = $nome;
    }

    /**
     * @return string
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * @return Cpf
     */
    public function getCpf(): string
    {
        return $this->cpf->getNumero();
    }


}
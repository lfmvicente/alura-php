<?php

declare(strict_types=1);

namespace Alura\Banco\Model\Conta;

use Alura\Banco\Model\Cpf;
use Alura\Banco\Model\Endereco;
use Alura\Banco\Model\Pessoa;

class Titular extends Pessoa
{
    private $endereco;

    public function __construct(Cpf $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function getEndereco(): Endereco
    {
        return $this->endereco;
    }
}

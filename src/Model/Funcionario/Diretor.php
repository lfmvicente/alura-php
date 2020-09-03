<?php
/**
 * Created by PhpStorm.
 * User: webjump-nb138
 * Date: 01/09/20
 * Time: 19:18
 */

declare(strict_types=1);

namespace Alura\Banco\Model\Funcionario;

use Alura\Banco\Model\Autenticavel;

class Diretor extends Funcionario implements Autenticavel
{
    public function calculaBonificacao(): float
    {
        return $this->getSalario() * 2;
    }

    public function podeAutenticar(string $senha):bool
    {
        return $senha === '1234';
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: webjump-nb138
 * Date: 01/09/20
 * Time: 19:17
 */

declare(strict_types=1);

namespace Alura\Banco\Model\Funcionario;


use Alura\Banco\Model\Autenticavel;

class Gerente extends Funcionario implements Autenticavel
{
    public function calculaBonificacao(): float
    {
        return $this->getSalario();
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === '4321';
    }
}

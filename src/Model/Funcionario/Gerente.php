<?php
/**
 * Created by PhpStorm.
 * User: webjump-nb138
 * Date: 01/09/20
 * Time: 19:17
 */

declare(strict_types=1);

namespace Alura\Banco\Model\Funcionario;


class Gerente extends Funcionario
{
    public function calculaBonificacao(): float
    {
        return $this->getSalario();
    }
}

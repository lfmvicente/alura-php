<?php
/**
 * Created by PhpStorm.
 * User: webjump-nb138
 * Date: 31/08/20
 * Time: 19:27
 */

declare(strict_types=1);

namespace Alura\Banco\Model\Conta;


class ContaPoupanca extends Conta
{
    protected function getTarifa(): float
    {
        return 0.02;
    }
}
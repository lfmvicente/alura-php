<?php
/**
 * Created by PhpStorm.
 * User: webjump-nb138
 * Date: 02/09/20
 * Time: 19:13
 */

declare(strict_types=1);

namespace Alura\Banco\Model\Funcionario;


class EditorVideo extends Funcionario
{
    public function calculaBonificacao(): float
    {
        return 600.0;
    }
}

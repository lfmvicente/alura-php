<?php
/**
 * Created by PhpStorm.
 * User: webjump-nb138
 * Date: 01/09/20
 * Time: 19:24
 */

declare(strict_types=1);

namespace Alura\Banco\Model\Funcionario;


class Desenvolvedor extends Funcionario
{
    public function sobeDeNivel()
    {
        $this->recebeAumento($this->getSalario() * 0.75);
    }
}
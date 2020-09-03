<?php
/**
 * Created by PhpStorm.
 * User: webjump-nb138
 * Date: 02/09/20
 * Time: 19:55
 */

declare(strict_types=1);

namespace Alura\Banco\Model;


interface Autenticavel
{
    public function podeAutenticar(string $senha): bool;
}
<?php
/**
 * Created by PhpStorm.
 * User: webjump-nb138
 * Date: 02/09/20
 * Time: 19:26
 */

declare(strict_types=1);

namespace Alura\Banco\Service;

use Alura\Banco\Model\Autenticavel;
use Alura\Banco\Model\Funcionario\Diretor;

class Autenticador
{
    public function tentaLogin(Autenticavel $autenticavel, string $senha): void
    {
        if ($autenticavel->podeAutenticar($senha)) {
            echo 'Usuario Logado';
        } else {
            echo 'Ops. Senha incorreta';
        }
    }
}

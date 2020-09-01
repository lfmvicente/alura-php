<?php
/**
 * Created by PhpStorm.
 * User: webjump-nb138
 * Date: 01/09/20
 * Time: 18:47
 */

declare(strict_types=1);

namespace Alura\Banco\Service;

use Alura\Banco\Model\Funcionario\Funcionario;

class ControladorDeBonificacoes
{
    private $totalBonificacoes = 0;

    public function adicionaBonificacao(Funcionario $funcionario)
    {
        $this->totalBonificacoes += $funcionario->calculaBonificacao();
    }

    public function getTotal():float
    {
        return $this->totalBonificacoes;
    }
}

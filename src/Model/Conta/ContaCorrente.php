<?php
/**
 * Created by PhpStorm.
 * User: webjump-nb138
 * Date: 31/08/20
 * Time: 19:18
 */

declare(strict_types=1);

namespace Alura\Banco\Model\Conta;

class ContaCorrente extends Conta
{
    protected function getTarifa(): float
    {
        return 0.05;
    }

    /**
     * @param Conta $contaDestino
     * @param float $valor
     */
    public function transferir(Conta $contaDestino, float $valor): void
    {
        if ($valor > 0) {
            if ($valor <= $this->saldo) {
                $this->sacar($valor);
                $contaDestino->depositar($valor);
                return;
            }
            echo 'Saldo Insuficiente';
            return;
        }
        echo 'Valor Inválido';
    }

}

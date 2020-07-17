<?php

declare(strict_types=1);

namespace Alura\Banco\Model\Conta;

class Conta
{
    private $titular;
    private $saldo;
    private static $quantidadeDeContas = 0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$quantidadeDeContas++;
    }

    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public function getNomeTitular(): string
    {
        return $this->titular->getNome();
    }

    public function getCpfTitular(): string
    {
        return $this->titular->getCpf();
    }

    /**
     * @param float $valor
     */
    public function sacar(float $valor): void
    {
        if ($valor > $this->saldo) {
            echo 'Saldo Insuficiente';
            return;
        }
        $this->saldo -= $valor;
    }

    /**
     * @param float $valor
     */
    public function depositar(float $valor): void
    {
        if ($valor >= 0) {
            $this->saldo += $valor;
            return;
        }
        echo 'Valor Inválido';
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

    public static function getQuantidadeDeContas():int
    {
        return self::$quantidadeDeContas;
    }
}

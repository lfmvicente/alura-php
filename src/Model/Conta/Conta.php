<?php

declare(strict_types=1);

namespace Alura\Banco\Model\Conta;

abstract class Conta
{
    private $titular;
    protected $saldo;
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
        $this->saldo -= $valor + ($valor * $this->getTarifa());
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
     * @return int
     */
    public static function getQuantidadeDeContas():int
    {
        return self::$quantidadeDeContas;
    }

    /**
     * @return float
     */
    abstract protected function getTarifa(): float;
}

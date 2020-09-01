<?php

require_once 'autoload.php';

use Alura\Banco\Model\Conta\Conta;
use Alura\Banco\Model\Conta\ContaCorrente;
use Alura\Banco\Model\Pessoa;
use Alura\Banco\Model\Conta\Titular;
use Alura\Banco\Model\Cpf;
use Alura\Banco\Model\Endereco;
use Alura\Banco\Model\Conta\ContaPoupanca;


$cpf = new Cpf('123.456.789-10');
$endereco = new Endereco('São Paulo', 'Vila', 'Rua Uma', '666');
$titular = new Titular($cpf, 'Felipe', $endereco);

$primeiraConta = new ContaPoupanca($titular);

$primeiraConta->depositar(500);
$primeiraConta->sacar(100);

echo $primeiraConta->getNomeTitular() . PHP_EOL;
echo $primeiraConta->getCpfTitular() . PHP_EOL;
echo 'R$ ' . $primeiraConta->getSaldo() . PHP_EOL;
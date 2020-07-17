<?php

require_once 'src/Model/Conta/Conta.php';
require_once 'src/Model/Pessoa.php';
require_once 'src/Model/Conta/Titular.php';
require_once 'src/Model/Cpf.php';
require_once 'src/Model/Endereco.php';

use Alura\Banco\Model\Conta\Conta;
use Alura\Banco\Model\Pessoa;
use Alura\Banco\Model\Conta\Titular;
use Alura\Banco\Model\Cpf;
use Alura\Banco\Model\Endereco;


$cpf = new Cpf('123.456.789-10');
$endereco = new Endereco('São Paulo', 'Vila', 'Rua Uma', '666');
$titular = new Titular($cpf, 'Felipe', $endereco);

$primeiraConta = new Conta($titular);

$primeiraConta->depositar(300);
$primeiraConta->sacar(150);

echo $primeiraConta->getNomeTitular() . PHP_EOL;
echo $primeiraConta->getCpfTitular() . PHP_EOL;
echo 'R$ ' . $primeiraConta->getSaldo() . PHP_EOL;
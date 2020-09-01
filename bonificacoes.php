<?php

require_once 'autoload.php';

use Alura\Banco\Model\Cpf;
use Alura\Banco\Model\Funcionario\Desenvolvedor;
use Alura\Banco\Model\Funcionario\Diretor;
use Alura\Banco\Model\Funcionario\Funcionario;
use Alura\Banco\Model\Funcionario\Gerente;
use Alura\Banco\Service\ControladorDeBonificacoes;


$funcionaria = new Gerente(
  'Thaina',
  new Cpf('987.654.321-01'),
  'Gerente',
  3000
);

$diretor = new Diretor(
  'Luis',
  new Cpf('111.222.333-44'),
  'Diretor',
  5000
);

$desenvolvedor = new Desenvolvedor(
  'Luis Felipe',
  new Cpf('777.888.899-10'),
  'Desenvolvedor',
  2000
);

$desenvolvedor->sobeDeNivel();

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacao($funcionaria);
$controlador->adicionaBonificacao($diretor);
$controlador->adicionaBonificacao($desenvolvedor);

echo $controlador->getTotal();
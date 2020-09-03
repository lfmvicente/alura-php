<?php

require_once 'autoload.php';

use Alura\Banco\Model\Cpf;
use Alura\Banco\Model\Funcionario\Desenvolvedor;
use Alura\Banco\Model\Funcionario\Diretor;
use Alura\Banco\Model\Funcionario\Gerente;
use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Model\Funcionario\EditorVideo;


$funcionaria = new Gerente(
  'Thaina',
  new Cpf('987.654.321-01'),
  3000
);

$diretor = new Diretor(
  'Luis',
  new Cpf('111.222.333-44'),
  5000
);

$desenvolvedor = new Desenvolvedor(
  'Luis Felipe',
  new Cpf('777.888.899-10'),
  2000
);

$editor = new EditorVideo(
    'Abc',
    new Cpf('999.888.777-66'),
    1500
);

$desenvolvedor->sobeDeNivel();

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacao($funcionaria);
$controlador->adicionaBonificacao($diretor);
$controlador->adicionaBonificacao($desenvolvedor);
$controlador->adicionaBonificacao($editor);

echo $controlador->getTotal();
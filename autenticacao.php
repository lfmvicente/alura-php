<?php

require_once 'autoload.php';

use Alura\Banco\Service\Autenticador;
use Alura\Banco\Model\Funcionario\Diretor;
use Alura\Banco\Model\Cpf;
use Alura\Banco\Model\Funcionario\Gerente;

$autenticador = new Autenticador();

$diretor = new Gerente(
    'Felipe',
    new Cpf('111.222.333-44'),
    5000
);

$autenticador->tentaLogin($diretor, 12342);
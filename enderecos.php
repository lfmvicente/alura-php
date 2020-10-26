<?php

declare(strict_types=1);

use Alura\Banco\Model\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('Sao Paulo', 'Bairro', 'Rua Certa', '71B');
$outroEndereco = new Endereco('Rio', 'Outro Bairro', 'Rua Errada', '10');

echo $umEndereco . PHP_EOL;
echo $outroEndereco;
<?php

use Luizlins\Projeto01\Modulos\Medico;
use Luizlins\Projeto01\Modulos\Paciente;
use Luizlins\Projeto01\Modulos\Consulta;
use Luizlins\Projeto01\Configuracoes\Telefone;

require_once "./vendor/autoload.php";

$medico = new Medico(
    "CRM/PI 24546",
    "Luiz Lins",
    "Oftomologista"
);

$telefone = new Telefone("86999920976");

$paciente = new Paciente(
    "006 237 863 54",
    "Maria Antonia",
    [$telefone, $telefone, $telefone, $telefone],
    "1985-10-27"
);

$consulta = new Consulta(
    $medico,
    $paciente,
    "2026-03-01",
    "13:00",
    400.00
);

var_dump($consulta);
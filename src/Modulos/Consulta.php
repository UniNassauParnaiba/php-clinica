<?php

namespace Luizlins\Projeto01\Modulos;

use Luizlins\Projeto01\Modulos\Medico;
use Luizlins\Projeto01\Modulos\Paciente;

class Consulta {

    function __construct(
        private Medico $medico,
        private Paciente $paciente,
        private string $data,
        private string $horario,
        private float $valor
    ) {}

}
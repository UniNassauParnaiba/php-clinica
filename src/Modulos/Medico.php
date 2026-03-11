<?php

namespace Luizlins\Projeto01\Modulos;

class Medico {

    function __construct(
        private string $crm,
        private string $nome,
        private string $especialidade
    ) {}

}
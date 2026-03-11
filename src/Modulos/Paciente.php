<?php

namespace Luizlins\Projeto01\Modulos;

class Paciente {

    function __construct(
        private string $cpf,
        private string $nome,
        private array $telefone,
        private string $dataNascimento
    ) {}

}
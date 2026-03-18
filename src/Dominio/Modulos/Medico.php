<?php

namespace Luizlins\Projeto01\Dominio\Modulos;

class Medico {

    function __construct(
        private ?int $id,
        private string $crm,
        private string $nome,
        private string $especialidade
    ) {}

    public function recuperarId()
    {
        return $this->id;
    }

    public function recuperarCRM()
    {
        return $this->crm;
    }
    
    public function recuperarNome()
    {
        return strtoupper($this->nome);
    }
    
    public function recuperarEspecialidade()
    {
        return $this->especialidade;
    }

}
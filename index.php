<?php
class Medico {
    function __construct(
        private string $crm, 
        private string $nome, 
        private string $especialidade
        ) {}

    public function mostrarMedico() {
        echo "CRM: " .  $this->crm . PHP_EOL;
        echo "Nome: ". $this->nome . PHP_EOL;
        echo "Especialidade: " . $this->especialidade . PHP_EOL;
    }
}
$medico = new Medico("CRM/PI 112469", "Luiz Lins", "Urologista");
$medico->mostrarMedico();
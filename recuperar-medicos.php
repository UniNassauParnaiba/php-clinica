<?php

use Luizlins\Projeto01\Dominio\Modulos\Medico;
use Luizlins\Projeto01\Infraestrutura\Persistencia\FabricaConexao;

require_once "vendor/autoload.php";

$pdo = FabricaConexao::criarConexao();

$statement = $pdo->query("SELECT * FROM medicos;");

$listaMedicos = [];
 

foreach($statement->fetchAll(PDO::FETCH_ASSOC) as $medico)
{
    $listaMedicos[] = new Medico(
        $medico["id"],
        $medico["crm"],
        $medico["nome"],
        $medico["especialidade"]
    );
}

var_dump($listaMedicos);
<?php

use Luizlins\Projeto01\Dominio\Modulos\Medico;
use Luizlins\Projeto01\Infraestrutura\Persistencia\FabricaConexao;

require_once "vendor/autoload.php";

$pdo = FabricaConexao::criarConexao();

$medico = new Medico(4, "CRM/PI 1111", "Antonio Carlos", "Otorrino");

$sqlInsert = "INSERT INTO medicos
        (id, crm, nome, especialidade)
        VALUES
        (?, ?, ?, ?);
";

$statement = $pdo->prepare($sqlInsert);
$statement->bindValue(1, $medico->recuperarId());
$statement->bindValue(2, $medico->recuperarCRM());
$statement->bindValue(3, $medico->recuperarNome());
$statement->bindValue(4, $medico->recuperarEspecialidade());

echo $statement->execute();
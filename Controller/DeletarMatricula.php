<?php

require_once '../autoload.php';

use Model\Matricula;

$obj = new Matricula();

$id  = $_GET['id'];

$where = "id_matricula = {$id}";

try {
	$obj->deletarMatricula($where);
    } 
    
    catch (Exception $e) 
    {
	echo "Não foi possível deletar a matricula " . $e->getMessage();
    }

if (!isset($e)) {
	header("Location: ../View/ListarMatriculas.php");
}

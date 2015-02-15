<?php

require_once '../autoload.php';

use Model\Salario;

$obj = new Salario();

$id  = $_GET['id'];

$where = "id_salario = {$id}";

try {
	$obj->deletarSalario($where);
    } 
    
    catch (Exception $e) 
    {
	echo "Não foi possível deletar sálario " . $e->getMessage();
    }

if (!isset($e)) {
	header("Location: ../View/ListarSalarios.php");
}



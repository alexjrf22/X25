<?php

require_once '../autoload.php';

use Model\Estado;

$obj = new Estado();

$id  = $_GET['id'];

$where = "id_estado= {$id}";

try {
	$obj->deletarEstado($where);
    } 
    
    catch (Exception $e) 
    {
	echo "Não foi possível deletar estado " . $e->getMessage();
    }

if (!isset($e)) {
	header("Location: ../View/ListarEstados.php");
}

<?php

require_once '../autoload.php';

use Model\Cidade;

$obj = new Cidade();

$id  = $_GET['id'];

$where = "id_cidade = {$id}";

try {
	$obj->deletarCidade($where);
    } 
    
    catch (Exception $e) 
    {
	echo "Não foi possível deletar cidade " . $e->getMessage();
    }

if (!isset($e)) {
	header("Location: ../View/ListarCidades.php");
}


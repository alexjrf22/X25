<?php

require_once '../autoload.php';

use Model\Carro;

$obj = new Carro();

$id  = $_GET['id'];

echo $id;

$where = "id_carro = {$id}";

try 
{
	
	$obj->inativarCarro($where);
	
} 

catch (Exception $e) 
{
echo "N�o foi Poss�vel inativar esse carro " . $e->getMessage();
}

if (!isset($e)) {
	header('Location:../View/ListarCarros.php');
}
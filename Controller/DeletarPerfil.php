<?php

require_once '../autoload.php';

use Model\Perfil;

$obj = new Perfil();

$id  = $_GET['id'];

$where = "id_perfil = {$id}";

try {
	$obj->deletarPerfil($where);
    } 
    
    catch (Exception $e) 
    {
	echo "Não foi possível deletar perfil " . $e->getMessage();
    }

if (!isset($e)) {
	header("Location: ../View/ListarPerfils.php");
}


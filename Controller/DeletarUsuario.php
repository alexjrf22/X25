<?php

require_once '../autoload.php';

use Model\Usuario;

$obj = new Usuario();

$id  = $_GET['id'];

$where = "id_usuario = {$id}";

try {
	$obj->deletarUsuario($where);
    } 
    
    catch (Exception $e) 
    {
	echo "Não foi possível deletar usuário " . $e->getMessage();
    }

if (!isset($e)) {
	header("Location: ../View/ListarUsuarios.php");
}

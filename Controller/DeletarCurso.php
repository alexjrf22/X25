<?php

require_once '../autoload.php';

use Model\Curso;

$obj = new Curso();

$id  = $_GET['id'];

$where = "id_curso = {$id}";

try {
	$obj->deletarCurso($where);
    } 
    
    catch (Exception $e) 
    {
	echo "Não foi possível deletar curso " . $e->getMessage();
    }

if (!isset($e)) {
	header("Location: ../View/ListarCursos.php");
}

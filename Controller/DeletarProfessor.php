<?php

require_once '../autoload.php';

use Model\Professor;

$obj = new Professor();

$id  = $_GET['id'];

$where = "id_professor = {$id}";

try {
	$obj->deletarProfessor($where);
    } 
    
    catch (Exception $e) 
    {
	echo "Não foi possível deletar professor " . $e->getMessage();
    }

if (!isset($e)) {
	header("Location: ../View/ListarProfessores.php");
}

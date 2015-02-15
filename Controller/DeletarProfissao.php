<?php

require_once '../autoload.php';

use Model\Profissao;

$obj = new Profissao();

$id  = $_GET['id'];

$where = "id_profissao = {$id}";

try {
	$obj->deletarProfissao($where);
    } 
    
    catch (Exception $e) 
    {
	echo "Não foi possível deletar a profissão " . $e->getMessage();
    }

if (!isset($e)) {
	header("Location: ../View/ListarProfissoes.php");
}

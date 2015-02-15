<?php

require_once '../autoload.php';

use Model\Carro;

$obj = new Carro();

$id  = $_GET['id'];

$where = "id_carro = {$id}";

try {
	$obj->deletarCarro($where);
} catch (Exception $e) {
	echo "a casa caiu mano" . $e->getMessage();
}

if (!isset($e)) {
	header("Location: ../View/ListarCarros.php");
}
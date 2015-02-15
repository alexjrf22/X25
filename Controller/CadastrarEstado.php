<?php

require_once '../autoload.php';
use Model\Estado;

$estado = $_POST['estado'];
$uf     = $_POST['uf'];
$id     = $_REQUEST['id'];
$dados = array( "uf" => $uf , "estado" => $estado );

$estados = new Estado();

try
{	
    if ( !empty($id) )
	{
		$where  = 'id_estado = ' . $id;
		$campos = "estado = '{$estado}', uf = '{$uf}'";
		$estados->editarEstado($campos, $where);
	}
        
	else
	{ 
           $estado->InserirEstado($dados);
        }
        
        header('Location:../View/ListarEstados.php');
        
}	
	
catch (Exception $erro) {
    
	echo "Não Foi possível salvar o estado " . $erro->getMessage();
}




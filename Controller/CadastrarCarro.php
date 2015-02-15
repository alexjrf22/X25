<?php

require_once '../autoload.php';

use Model\Carro;

$nome     = $_POST ['carro'];
$modelo   = $_POST ['modelo'];
$usuario  = $_POST ['dono'];
$id       = $_REQUEST['id'];

$dados    = array( 
    
		'nome_carro' => $nome,
		'modelo'     => $modelo,
		'id_usuario' => $usuario,
		
); 

$obj = new Carro();

try
{
	
	if ( !empty($id) )
	{
		$where = 'id_carro = ' . $id;
		$campos= "nome_carro = '{$nome}', modelo = '{$modelo}', id_usuario = '{$usuario}'";
		$obj->editarCarro($campos, $where);
	}
        
	else
	{
    
          $obj->inserirCarro($dados);
            
	}
        
         header("Location: ../View/ListarCarros.php");
}

 catch (Exception $erro)
 {
     
    echo 'Erro ao cadastrar carro ' . $erro->getMessage();
     
 }
 

<?php

require_once '../autoload.php';

use Model\Cidade;

$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$id     = $_REQUEST ['id']; 

$dados = array("nome_cidade" => $cidade, "id_estado" => $estado);

$obj = new Cidade();

try
{
    if (!empty ($id))
    {  
       $campos = "nome_cidade = '{$cidade}', id_estado = '{$estado}'";
       $where = 'id_cidade = ' . $id;
       $obj->EditarCidade($campos, $where);
    }
    else{
        
    $obj->InserirCidade($dados);
    
    }
    
    header("Location: ../View/ListarCidades.php");
    
} 

catch (Exception $erro)
{
    
    echo "Erro ao cadastrar cidade" . $erro->getMessage();
    
}



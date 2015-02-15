<?php

require_once '../autoload.php';

use Model\Perfil;

$obj = new Perfil();

$perfil = $_POST['perfil'];
$id     = $_REQUEST['id'];

$dados = array("perfil" => $perfil);

try 
{  
   if (!empty($id))
   {
       $campos = "perfil = '{$perfil}'";
       $where = "id_perfil = " . $id;
       $obj->EditarPerfil($campos, $where);
       
   }
   else
   {
       
       $obj->salvarPerfil($dados); 
       
   }
   
   header('Location:../View/ListarPerfils.php');
   
} 
catch (Exception $erro) 
{
    echo "Nào foi possível cadastrar o perfil " . $erro->getMessage();
}


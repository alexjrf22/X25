<?php

require_once '../autoload.php';

use Model\Salario;

$salario_jr = $_POST['sal_jr'];
$salario_pl = $_POST['sal_pl'];
$hr_jr      = $_POST['hr_jr'];
$hr_pl      = $_POST['hr_pl'];
$id         = $_REQUEST['id'];
        

$dados    = array( 

                'salario_jr'         => $salario_jr,
		'salario_pleno'      => $salario_pl,
                'val_hr_extra_jr'    => $hr_jr ,
		'val_hr_extra_pleno' => $hr_pl 
        
              ); 

$obj = new Salario();

try
{
   if (!empty($id))
   {
     $campos = "salario_jr = '{$salario_jr}', salario_pleno = '{$salario_pl}', val_hr_extra_jr = '{$hr_jr}', val_hr_extra_pleno = '{$hr_pl}'";  
     $where  = "id_salario = " . $id;
     $obj->editarSalario($campos, $where);
   } 
   else
   {
       $obj->inserirSalario($dados);
   }
   
   header("Location: ../View/ListarSalarios.php");
                 
}

 catch (Exception $erro)
 {
     
    echo 'Erro ao cadastrar sálario ' . $erro->getMessage();
     
 }
 


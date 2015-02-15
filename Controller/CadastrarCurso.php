<?php

require_once '../autoload.php';

use Model\Curso;

$obj = new Curso();
$curso       = $_POST['curso'];
$carga_hrs   = $_POST['carga_hrs'];
$data_inicio = $_POST['inicio'];
$data_fim    = $_POST['fim'];
$professor   = $_POST['professor'];
$id          = $_REQUEST['id'];
$data_inicio_us = $obj->DataParaUS($data_inicio);
$data_fim_us    = $obj->DataParaUS($data_fim);

$dados    = array( 

                'curso'         => $curso,
		'carga_horaria' => $carga_hrs ,
                'data_inicio'   => $data_inicio_us,
		'data_termino'  => $data_fim_us ,
                'id_professor'  => $professor
        
              ); 



try
{
   
   if (!empty($id))
   {
       $campos = "curso = '{$curso}', carga_horaria = '{$carga_hrs}', data_inicio = '{$data_inicio_us}', data_termino = '{$data_fim_us}', id_professor = '{$professor}'";
       $where  = "id_curso = " . $id;
       $obj->editarCurso($campos, $where);
   }
 else 
   {
     
     $obj->inserirCurso($dados);
       
   }
   
   header("Location: ../View/ListarCursos.php");
                 
}

 catch (Exception $erro)
 {
     
    echo 'Erro ao cadastrar curso ' . $erro->getMessage();
     
 }
 



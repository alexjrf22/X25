<?php

require_once '../autoload.php';

use Model\Matricula;

$obj = new Matricula();


$dados    = array( 

                'id_curso'         => $_POST['cursos'],
		'id_usuario'       => $_POST['alunos']
                
              ); 



try
{
    
   $obj->efetuarMatricula($dados);
                 
}

 catch (Exception $erro)
 {
     
    echo 'Erro ao Matrícular aluno ' . $erro->getMessage();
     
 }
 
header("Location: ../View/ListarMatriculas.php");


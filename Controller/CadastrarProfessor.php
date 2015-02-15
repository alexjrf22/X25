<?php

require_once '../autoload.php';

use Model\Professor;

$professor = $_POST['professor'];
$email     = $_POST['email'];
$telefone  = $_POST['telefone'];
$id        = $_REQUEST['id'];

$dados = array(
    
               "professor"        => $professor,
               "email_professor"  => $email,
               "telefone"         => $telefone
              
              );

$obj = new Professor();

try
{
    if (!empty($id))
    {
        $campos = "professor = '{$professor}', email_professor = '{$email}', telefone = '{$telefone}'";
        $where  = "id_professor = " . $id;
        $obj->EditarProfessor($campos, $where);
    }
    else
    {
    $obj->inserirProfessor($dados);
    }
    
    header("Location: ../View/ListarProfessores.php");
    
}

catch(Exception $erro)
{
    
    echo "Não foi possível cadastrar o professor " . $erro->getMessage(); 
    
}



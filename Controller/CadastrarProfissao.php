<?php 

require_once '../autoload.php';

use Model\Profissao;

$profissao =  $_POST['profissao'];
$salario   = $_POST['salario'];
$id        = $_REQUEST['id'];

$dados =      array ( "profissao"     =>   $profissao , "id_salario" => $salario);

$obj = new Profissao();

try 
{
    if (!empty($id))
    {
        $campos = "profissao = '{$profissao}', id_salario = '{$salario}'";
        $where  = "id_profissao = " . $id;
        $obj->EditarProfissao($campos, $where);
    }
    else
    {
        $obj->inserirProfissao($dados);
    }
     
} 
catch (Exception $erro) 
{
     echo "Não foi possível cadastrar o usuário" . $erro->getMessage();
}

header('Location:../View/ListarProfissoes.php');

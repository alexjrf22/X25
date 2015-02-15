<?php 

require_once '../autoload.php';
use  Model\Usuario;

$nome      = $_POST['nome'];
$email     = $_POST['email'];
$perfil    = $_POST['perfil'];
$profissao = $_POST['profissao'];
$estado    = $_POST['estado'];
$cidade    = $_POST['cidade'];
$id        = $_REQUEST['id'];
	
$dados =      array
              ( 
                   "nome_usuario"  => $nome,
	           "email_usuario" => $email,
		   "id_perfil"     => $perfil,
                   "id_estado"     => $estado,
                   "id_cidade"     => $cidade,
              	   "id_profissao"  => $profissao
              );

$usuario = new Usuario();

try 
{
    if ( !empty($id) )
	{
            $where = 'id_usuario = ' . $id;
            $campos= "nome_usuario = '{$nome}', email_usuario = '{$email}', id_perfil = '{$perfil}', id_estado = '{$estado}', id_profissao = '{$profissao}', id_cidade = '{$cidade}'";
            $usuario->editarUsuario($campos, $where);
	}
        else
        {
            $usuario->salvarUsuario($dados);
        }
        
     header('Location:../View/ListarUsuarios.php');
     
} 

catch (Exception $erro) 
{
     echo "Não foi possível cadastrar o usuário" . $erro->getMessage();
}





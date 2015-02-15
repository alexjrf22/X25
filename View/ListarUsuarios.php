<?php 
require_once '../autoload.php';	

use Model\Usuario;

$obj = new Usuario();

$usuarios = $obj->listarTudo();

?>

<html>
	<head>
		<title> Lista de Usuários</title>
                <meta charset="utf-8" />
                <link rel="stylesheet" href="../css/estilo.css" />
	</head>
        
	<body>
        
            <h1>Lista de Usuários</h1>

            <?php require_once 'Menu.html';?>
            <FORM METHOD="LINK" ACTION="FormCadastrarUsuario.php"> 
            
            <INPUT TYPE="submit" VALUE="Novo Usuário" /> 
            
            </FORM>


<table>
	<tr>
		<th>Nome</th>
		<th>Email</th>
                <th>Profissão</th>
		<th>Perfil</th>
                <th>sálario</th>
                <th>Cidade</th>
                <th>Estado</th>
                <th colspan="2">Ações</th>
	</tr>
        
	
           <?php foreach( $usuarios as $usuario): ?>
		<tr>
		    
			<td><?php echo $usuario['nome_usuario'];?></td>
			<td><?php echo $usuario['email_usuario'];?></td>
                        <td><?php echo $usuario['profissao'];?></td>
			<td><?php echo $usuario['perfil'];?></td>
                        <td><?php echo ($usuario['id_perfil']) == 1 ? "R$ " . $usuario['salario_jr']: "R$ " . $usuario['salario_pleno'];?></td>
                        <td><?php echo $usuario['nome_cidade'];?></td>
                        <td><?php echo $usuario['estado'];?></td>
                        <td><a href="../controller/EditarUsuario.php?id=<?php echo $usuario['id_usuario']?>">Editar Usuário</a></td>
                        <td><a href="../controller/DeletarUsuario.php?id=<?php echo $usuario['id_usuario']?>">Deletar Usuário</a></td>
		</tr>
           <?php endforeach;?>     
	
       
                
</table>



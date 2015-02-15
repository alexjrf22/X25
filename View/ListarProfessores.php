<?php

require_once '../autoload.php';

use Model\Professor;

$obj = new Professor();

$professores = $obj->listarProfessores();

?>

<html>
	<head>
		<title> Lista de Professores</title>
                <meta charset="utf-8" />
                <link rel="stylesheet" href="../css/estilo.css" />
	</head>
        
	<body>
        
            <h1>Lista de Professores</h1>

            <?php require_once 'Menu.html';?>
            
            <FORM METHOD="LINK" ACTION="FormCadastrarProfessor.php"> 
            
            <INPUT TYPE="submit" VALUE="Novo Professor" /> 
            
            </FORM>


<table>
	<tr>
		<th>Nome</th>
		<th>E-mail</th>
		<th>Telefone</th>
                <th colspan="2">Ações</th>
                
	</tr>
        
	
           <?php foreach( $professores as $professor): ?>
        
		<tr>
		    
			<td><?php echo $professor['professor'];?></td>
			<td><?php echo $professor['email_professor'];?></td>
			<td><?php echo $professor['telefone'];?></td>
                        <td><a href="../Controller/DeletarProfessor.php?id=<?php echo $professor['id_professor']?>">Excluir Registro</a></td>
                        <td><a href="../Controller/EditarProfessor.php?id=<?php echo $professor['id_professor']?>">Editar Registro</a></td> 
		</tr>
                
           <?php endforeach;?>     
	              
</table>


<?php

require_once '../autoload.php';

use Model\Matricula;

$obj = new Matricula();

$matriculas = $obj->listarMatriculas();

?>

<html>
	<head>
		<title> Lista de Matrículas</title>
                <meta charset="utf-8" />
                <link rel="stylesheet" href="../css/estilo.css" />
	</head>
        
	<body>
        
            <h1>Lista de Matrículas</h1>

            <?php require_once 'Menu.html';?>
            
            <FORM METHOD="LINK" ACTION="FormCadastrarMatricula.php"> 
            
            <INPUT TYPE="submit" VALUE="Nova Matrícula" /> 
            
            </FORM>


<table>
	<tr>
		<th>Curso</th>
		<th>Aluno</th>
                <th>Ações</th>
                
	</tr>
        
	
           <?php foreach( $matriculas as $matricula): ?>
              
		<tr> 
			<td><?php echo $matricula['curso'];?></td>
			<td><?php echo $matricula['nome_usuario'];?></td>
                        <td><a href="../Controller/DeletarMatricula.php?id=<?php echo $matricula['id_matricula']?>">Excluir Registro</a></td>
		</tr>
                
           <?php endforeach;?>     
	              
</table>










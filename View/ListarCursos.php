<?php

require_once '../autoload.php';

use Model\Curso;

$obj = new Curso();

$cursos = $obj->listarCursosJoinProfessores();


?>

<html>
	<head>
		<title> Lista de Cursos</title>
                <meta charset="utf-8" />
                <link rel="stylesheet" href="../css/estilo.css" />
	</head>
        
	<body>
        
            <h1>Lista de Cursos</h1>

            <?php require_once 'Menu.html';?>
            
            <FORM METHOD="LINK" ACTION="FormCadastrarCurso.php"> 
            
            <INPUT TYPE="submit" VALUE="Novo Curso" /> 
            
            </FORM>


<table>
	<tr>
		<th>Curso</th>
		<th>Carga horária</th>
		<th>Data do início</th>
                <th>Data do término</th>
                <th>Professor</th>
                <th colspan="2">Ações</th>
                
	</tr>
        
	
           <?php foreach( $cursos as $curso): 
              
              
              $data_inicio_br = $obj->DataParaBR($curso['data_inicio']); 
              $data_termino_br = $obj->DataParaBR($curso['data_termino']); 
              
            ?>
         
               
        
		<tr>
		    
			<td><?php echo $curso['curso'];?></td>
			<td><?php echo $curso['carga_horaria'];?></td>
			<td><?php echo $data_inicio_br; ?></td>
                        <td><?php echo $data_termino_br;?></td>
                        <td><?php echo $curso['professor'];?></td>
                        <td><a href="../Controller/DeletarCurso.php?id=<?php echo $curso['id_curso']?>">Excluir Registro</a></td>
                        <td><a href="../Controller/EditarCurso.php?id=<?php echo $curso['id_curso']?>">Editar Registro</a></td>
		</tr>
                
           <?php endforeach;?>     
	              
</table>






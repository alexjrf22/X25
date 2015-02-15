<?php 

require_once '../autoload.php';	

use Model\Estado;

$obj = new Estado();

$estados = $obj->listarUfs();
?>

<html>
	<head>
		<title> Lista de Estados</title>
                <meta charset="utf-8" />
                <link rel="stylesheet" href="../css/estilo.css" />
	</head>
        
	<body>
        
            <h1>Lista de Estados</h1>
            <?php require_once 'Menu.html';?>
            
            <FORM METHOD="LINK" ACTION="FormCadastrarEstado.php"> 
            
            <INPUT TYPE="submit" VALUE="Novo Estado" /> 
            
            </FORM>
            
<table>
	<tr>
		<th>Estado</th>
                <th>UF</th>
		<th colspan="2">Ação</th>
	</tr>
	<?php foreach( $estados as $estado ): ?>
		<tr>    
            <td><?php echo $estado['estado']; ?></td>
			<td><?php echo $estado['uf']?></td>
			<td><a href="../Controller/DeletarEstado.php?id=<?php echo $estado['id_estado']?>">Excluir Registro</a></td>
                        <td><a href="../Controller/EditarEstado.php?id=<?php echo $estado['id_estado']?>">Editar Registro</a></td>
		</tr>
	<?php endforeach;?>
</table>


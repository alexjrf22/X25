<?php 

require_once '../autoload.php';	

use Model\Salario;

$obj = new Salario();

$salarios = $obj->listarSalarios();

?>

<html>
	<head>
		<title> Lista de Sálarios</title>
                <meta charset="utf-8" />
                <link rel="stylesheet" href="../css/estilo.css" />
	</head>
        
	<body>
        
            <h1>Lista de Usuários</h1>

<?php require_once 'Menu.html'; ?>           

<FORM METHOD="LINK" ACTION="FormCadastrarSalario.php"> 
            
            <INPUT TYPE="submit" VALUE="Novo Sálario" /> 
            
            </FORM>
<table>
	<tr>
		
		<th>Sálario Junior</th>
		<th>Sálario Pleno</th>
                <th>Hora extra Junior</th>
                <th>Hora extra Pleno</th>
                <th colspan="2">Ações</th>
	</tr>
        
	<?php foreach( $salarios as $salario ): ?>
        
		<tr>
			
                        <td><?php echo "R$ " . $salario ['salario_jr'];?></td>
			<td><?php echo "R$ " . $salario ['salario_pleno'];?></td>
                        <td><?php echo "R$ " . $salario ['val_hr_extra_jr'];?></td>
                        <td><?php echo "R$ " . $salario ['val_hr_extra_pleno'];?></td>
                        <td><a href="../Controller/DeletarSalario.php?id=<?php echo $salario['id_salario']?>">Excluir Registro</a></td>
                        <td><a href="../Controller/EditarSalario.php?id=<?php echo $salario['id_salario']?>">Editar Registro</a></td> 
                     
		</tr>
                
	<?php endforeach;?>
        
                
</table>







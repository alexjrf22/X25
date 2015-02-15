<?php 

require_once '../autoload.php';	

use Model\Carro;

$obj = new Carro();

$carros = $obj->ListarCarrosOrdenados();

?>

<html>
	<head>
		<title> Lista de Usuários</title>
                <meta charset="utf-8" />
                <link rel="stylesheet" href="../css/estilo.css" />
	</head>
        
	<body>
        
            <h1>Lista de Usuários</h1>

<?php require_once 'Menu.html'; ?>           

<FORM METHOD="LINK" ACTION="FormCadastrarCarro.php"> 
            
            <INPUT TYPE="submit" VALUE="Novo Carro" /> 
            
            </FORM>
<table>
	<tr>
		<th>Carro</th>
		<th>Modelo</th>
		<th>Dono</th>
                <th>Situação</th>
                <th colspan="3">Ações</th>
	</tr>
        
	<?php foreach( $carros as $carro ): ?>
        
		<tr>
			<td><?php echo $carro['nome_carro'];?></td>
			<td><?php echo $carro['modelo'];?></td>
			<td><?php echo $carro['nome_usuario'];?></td>
                        <td><?php echo ($carro['ativo']==1) ? "Ativo" : "Inativo" ; ?></td>
                        <td><a href="../controller/editarCarro.php?id=<?php echo $carro['id_carro']?>">Editar Carro</a></td>
			<td><a href="../controller/deletarCarro.php?id=<?php echo $carro['id_carro']?>">Deletar Carro</a></td>
                        <?php if ($carro['ativo']==1) { ?>
			<td><a href="../controller/inativarCarro.php?id=<?php echo $carro['id_carro']?>">Inativar Carro</a></td>
                        <?php } else {?>
                        <td>Botão desativado</td>
                        <?php }?>
		</tr>
                
	<?php endforeach;?>
        
                
</table>






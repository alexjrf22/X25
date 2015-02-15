<?php 

require_once '../autoload.php';	

use Model\Cidade;

$obj = new Cidade();

$cidades = $obj->ListarCidadesJoinEstados();

?>

<html>
	<head>
		<title> Lista de Cidades</title>
                <meta charset="utf-8" />
                <link rel="stylesheet" href="../css/estilo.css" />
	</head>
        
	<body>
        
            <h1>Lista de Cidades</h1>
            <?php require_once 'Menu.html'; ?>           

<FORM METHOD="LINK" ACTION="FormCadastrarCidade.php"> 
            
            <INPUT TYPE="submit" VALUE="Nova cidade" /> 
            
            </FORM>
          
<table>
	<tr>
            
                <th>Cidade</th>
		<th>Estado</th>
                <th>UF</th>
		<th colspan="2">Ação</th>
	</tr>
	<?php foreach( $cidades as $cidade ): ?>
		<tr>    
                        <td><?php echo $cidade['nome_cidade']; ?></td>
			<td><?php echo $cidade['estado']?></td>
                        <td><?php echo $cidade['uf']?></td>
                        <td><a href="../Controller/DeletarCidade.php?id=<?php echo $cidade['id_cidade']?>">Excluir Registro</a></td>
                        <td><a href="../Controller/EditarCidade.php?id=<?php echo $cidade['id_cidade']?>">Editar Registro</a></td>
		</tr>
	<?php endforeach;?>
                
</table>
            
</body>

</html>
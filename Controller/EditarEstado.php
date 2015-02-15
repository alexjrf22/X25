<?php

require_once '../autoload.php';

use Model\Estado;

$obj                = new Estado();
$estados            = $obj->listarUfs();
$id	            = $_GET['id'];
$where              = "id_estado = {$id}";
$estado_selecionado = $obj->buscarEstado($where);

?>
<html>
	<head>
		<title> Editar Estado </title>
                <meta charset="utf-8">
	</head>
	<body>
            <form action="CadastrarEstado.php" method="post">
			<input type="hidden" name='id' value="<?php echo $estado_selecionado['id_estado']?>" />
			<label>Estado</label>
			<input type ="text" name="estado" value = "<?php echo $estado_selecionado['estado']?>" />
			<label>UF</label>
			<input type ="text" name="uf" value = "<?php echo $estado_selecionado['uf']?>" />
			
			<input type="submit" value="Alterar Estado" />
		</form>
	</body>
</html>




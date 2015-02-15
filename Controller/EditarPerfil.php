<?php

require_once '../autoload.php';

use Model\Perfil;


$obj_perfil         = new Perfil();
$id	            = $_GET['id'];
$where              = "id_perfil = {$id}";
$perfil_selecionado = $obj_perfil->buscarPerfil($where);

?>
<html>
	<head>
		<title> Editar Perfil </title>
                <meta charset="utf-8">
	</head>
	<body>
            <form action="CadastrarPerfil.php" method="post">
			<input type="hidden" name='id' value="<?php echo $perfil_selecionado['id_perfil']?>" />
			<label>Perfil</label>
			<input type ="text" name="perfil" value = "<?php echo $perfil_selecionado['perfil']?>" />
			
			<input type="submit" value="Alterar Perfil" />
		</form>
	</body>
</html>




<?php

require_once '../autoload.php';

use Model\Usuario;
use Model\Carro;

$usuario         = new Usuario();
$todosOsUsuarios = $usuario->listarUsuarios();

$obj           = new Carro();
$id	       = $_GET['id'];
$where         = "id_carro = {$id}";
$carro         = $obj->buscarCarro($where);

?>
<html>
	<head>
		<title> Inserir Carro </title>
	</head>
	<body>
		<form action="cadastrarCarro.php" method="post">
			<input type="hidden" name='id' value="<?php echo $carro['id_carro']?>" />
			<label>Nome</label>
			<input type ="text" name="carro" value = "<?php echo $carro['nome_carro']?>" />
			<label>Modelo</label>
			<input type ="text" name="modelo" value = "<?php echo $carro['modelo']?>" />
			<label>Usuário</label>
			<select name="dono">
				<?php foreach ( $todosOsUsuarios as $usuario ):?>
					<?php 
						if ($carro['id_usuario'] == $usuario['id_usuario']) {
							$selected = "selected = 'selected'";
						}else{
							$selected = null;
						} 
					?>
					<option <?php echo $selected?> value="<?php echo $usuario['id_usuario'];?>"><?php echo $usuario['nome_usuario'];?>
					</option>
				<?php endforeach;?>
			</select>
			<input type="submit" value="Alterar Carro" />
		</form>
	</body>
</html>
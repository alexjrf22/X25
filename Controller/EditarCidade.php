<?php

require_once '../autoload.php';

use Model\Cidade;
use Model\Estado;

$obj_estado       = new Estado();
$estados          = $obj_estado->listarUfs();

$obj_cidade         = new Cidade();
$id	            = $_GET['id'];
$where              = "id_cidade = {$id}";
$cidade_selecionado = $obj_cidade->buscarCidade($where);

?>
<html>
	<head>
		<title> Editar Cidade </title>
	</head>
	<body>
            <form action="CadastrarCidade.php" method="post">
			<input type="hidden" name='id' value="<?php echo $cidade_selecionado['id_cidade']?>" />
			<label>Nome</label>
			<input type ="text" name="cidade" value = "<?php echo $cidade_selecionado['nome_cidade']?>" />
			
			<label>Estado</label>
			<select name="estado">
				<?php foreach ( $estados as $estado ):?>
					<?php 
						if ($cidade_selecionado['id_estado'] == $estado['id_estado']) {
							$selected = "selected = 'selected'";
						}else{
							$selected = null;
						} 
					?>
					<option <?php echo $selected?> value="<?php echo $estado['id_estado'];?>"><?php echo $estado['estado'];?>
					</option>
				<?php endforeach;?>
			</select>
			<input type="submit" value="Alterar Cidade" />
		</form>
	</body>
</html>


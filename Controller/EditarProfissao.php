<?php

require_once '../autoload.php';

use Model\Salario;
use Model\Profissao;

$obj_salario         = new Salario();
$salarios = $obj_salario->listarSalarios();

$obj                   = new Profissao();
$id	               = $_GET['id'];
$where                 = "id_profissao = {$id}";
$profissao_selecionada = $obj->buscarProfissao($where);

?>
<html>
	<head>
		<title> Editar Profissão </title>
	</head>
	<body>
            <form action="CadastrarProfissao.php" method="post">
			<input type="hidden" name='id' value="<?php echo $profissao_selecionada['id_profissao']?>" />
			<label>Profissão</label>
			<input type ="text" name="profissao" value = "<?php echo $profissao_selecionada['profissao']?>" />
			
			<label>Sálario</label>
			<select name="salario">
				<?php foreach ( $salarios as $salario ):?>
					<?php 
						if ($profissao_selecionada['id_profissao'] == $salario['id_profissao']) {
							$selected = "selected = 'selected'";
						}else{
							$selected = null;
						} 
					?>
					<option <?php echo $selected?> value="<?php echo $salario['id_salario'];?>"><?php echo "R$" . $salario['salario_jr'] . " a R$ " . $salario['salario_pleno']; ?>
					</option>
				<?php endforeach;?>
			</select>
			<input type="submit" value="Alterar Profissão" />
		</form>
	</body>
</html>

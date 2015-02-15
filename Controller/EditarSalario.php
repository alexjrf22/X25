<?php

require_once '../autoload.php';

use Model\Salario;


$obj_salario         = new Salario();

$id	               = $_GET['id'];
$where                 = "id_salario = {$id}";
$salario_selecionado = $obj_salario ->buscarSalario($where);

?>
<html>
	<head>
		<title> Editar Profissão </title>
                <meta charset="utf-8">
	</head>
	<body>
            <form action="CadastrarSalario.php" method="post">
			<input type="hidden" name='id' value="<?php echo $salario_selecionado['id_salario']?>" />
			<label>Sálario Junior</label>
			<input type ="text" name="sal_jr" value = "<?php echo $salario_selecionado['salario_jr']?>" /><br>
			
                        <label>Sálario Pleno</label>
			<input type ="text" name="sal_pl" value = "<?php echo $salario_selecionado['salario_pleno']?>" /><br>
                        
                        <label>Valor hora extra junior</label>
			<input type ="text" name="hr_jr" value = "<?php echo $salario_selecionado['val_hr_extra_jr']?>" /><br>
                        
                        <label>Valor hora extra pleno</label>
			<input type ="text" name="hr_pl" value = "<?php echo $salario_selecionado['val_hr_extra_pleno']?>" /><br>
			
			<input type="submit" value="Alterar Sálario" />
		</form>
	</body>
</html>


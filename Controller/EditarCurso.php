<?php

require_once '../autoload.php';

use Model\Curso;
use Model\Professor;

$obj_professor      = new Professor();
$professores         = $obj_professor ->listarProfessores();

$obj_curso          = new Curso();
$id	            = $_GET['id'];
$where              = "id_curso = {$id}";
$curso_selecionado = $obj_curso->buscarCurso($where);

?>
<html>
	<head>
		<title> Editar Curso </title>
                <meta charset="utf-8" />
                <link rel="stylesheet" href="../css/estilo.css" />
	</head>
	<body>
            <form action="CadastrarCurso.php" method="post">
			<input type="hidden" name='id' value="<?php echo $curso_selecionado['id_curso']?>" />
			<label class="form_estado">Curso</label>
			<input type ="text" name="curso" value = "<?php echo $curso_selecionado['curso']?>" /><br>
                        
                        <label class="form_estado">Carga horária</label>
                        <input type ="text" name="carga_hrs" value = "<?php echo $curso_selecionado['carga_horaria']?>" /><br>
                        
                        <label class="form_estado">Data Início</label>
			<input type ="text" name="inicio" value = "<?php echo $obj_curso->DataParaBR($curso_selecionado['data_inicio'])?>" /><br>
                        
                        <label class="form_estado">Data término</label>
			<input type ="text" name="fim" value = "<?php echo $obj_curso->DataParaBR($curso_selecionado['data_termino'])?>" /><br>
			
			<label class="form_estado">Ministrado por </label>
			<select name="professor">
				<?php foreach ( $professores  as $professor ):?>
					<?php 
						if ($curso_selecionado['id_professor'] == $professor['id_professor']) {
							$selected = "selected = 'selected'";
						}else{
							$selected = null;
						} 
					?>
					<option <?php echo $selected?> value="<?php echo $professor['id_professor'];?>"><?php echo $professor['professor'];?>
					</option>
				<?php endforeach;?>
			</select><br>
			<input type="submit" value="Alterar Curso" />
		</form>
	</body>
</html>


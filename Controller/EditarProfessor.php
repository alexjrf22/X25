<?php

require_once '../autoload.php';

use Model\Professor;


$obj_professor          = new Professor();

$id	               = $_GET['id'];
$where                 = "id_professor = {$id}";
$professor_selecionado   = $obj_professor  ->buscarProfessor($where);

?>
<html>
	<head>
		<title> Editar Professor </title>
                <meta charset="utf-8">
                <link rel="stylesheet" href="../css/estilo.css" />
	</head>
	<body>
            <form action="CadastrarProfessor.php" method="post">
			<input type="hidden" name='id' value="<?php echo $professor_selecionado['id_professor']?>" />
			<label class="form_estado">Professor</label>
			<input type ="text" name="professor" value = "<?php echo $professor_selecionado['professor']?>" /><br>
			
                        <label class="form_estado">E-mail</label>
			<input type ="text" name="email" value = "<?php echo $professor_selecionado['email_professor']?>" /><br>
                        
                        <label class="form_estado">Telefone</label>
			<input type ="text" name="telefone" value = "<?php echo $professor_selecionado['telefone']?>" /><br>
                        		
			<input type="submit" value="Alterar Professor" />
		</form>
	</body>
</html>




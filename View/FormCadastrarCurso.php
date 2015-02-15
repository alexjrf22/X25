<?php 

require_once '../autoload.php';

use Model\Professor;

$obj = new Professor;

$professores = $obj->listarProfessores();

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Cadastrar Curso</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/estilo.css" />
    </head>
   
	<body>
            
            <h1>Cadastrar Curso</h1>
            
            <?php require_once 'Menu.html'; ?>
            
            <form action="../Controller/CadastrarCurso.php" method="post">
                
			<label class="form_estado">Curso</label>
                        <input type="text" name="curso" /><br>
			
                        <label class="form_estado">Carga horária</label>
                        <input type="text" name="carga_hrs" /><br>
                        
                        <label class="form_estado">Data Início</label>
                        <input type="text" name="inicio" placeholder="Exemplo: 02/05/1986" /><br>
                        
                        <label class="form_estado">Data Término</label>
                        <input type="text" placeholder="Exemplo: 02/05/1986" name="fim" /><br>
                        
                        <label class="form_estado">Ministrado por</label>
                        
                        
                        
                        <select name="professor">
                            
                            <?php foreach ($professores as $professor): ?>
                            
                            <option value="<?php echo $professor['id_professor'];?>"><?php echo $professor['professor'];?></option>
                            
                            <?php endforeach; ?>
                        </select><br>
			
                        
                        
			<input type="submit" value="Cadastrar Curso" />
                        
		</form>
	</body>
</html>





<?php 

require_once '../autoload.php';

use Model\Salario;

$obj = new Salario();

$salarios = $obj->listarSalarios();

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Cadastrar Profissão</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/estilo.css" />
    </head>
   
	<body>
            
            <h1>Cadastrar Profissão</h1>
            
            <?php require_once 'Menu.html'; ?>
            
            <form action="../Controller/CadastrarProfissao.php" method="post">
                
			<label class="form_estado">Cadastrar Profissão</label>
                        <input type="text" name="profissao" /><br>
                        <label class="form_estado">Faixa Sálarial</label>
                        
                        <select name="salario">
                            
                            <?php foreach ($salarios as $salario):?>
                            
                            <option value="<?php echo $salario['id_salario']; ?>">
                            <?php echo "R$" . $salario['salario_jr'] . " a R$ " . $salario['salario_pleno']; ?>
                            </option>
                            
                            <?php endforeach; ?>
                            
                        </select><br>
                        
			<input type="submit" value="Cadastrar Profissão" />
		</form>
	</body>
</html>


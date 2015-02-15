<?php

require_once '../autoload.php';
use Model\Profissao;

$obj = new Profissao();

$profissoes = $obj->listarProfissao();

?>
<html>
	<head>
		<title> Cadastrar Sálario </title>
                <meta charset="utf-8" />
                <link rel="stylesheet" href="../css/estilo.css" />
	</head>
	<body>
            
            <h1>Cadastrar Sálario</h1>
          
          <?php require_once 'Menu.html';?>  
		<form action="../controller/CadastrarSalario.php" method="post">
                      
                        <label class="form_estado">Sálario Junior</label>
			<input type ="text" name="sal_jr" /><br>
                        
                        <label class="form_estado">Sálario Pleno</label>
                        <input type ="text" name="sal_pl" /><br>
                        
                        <label class="form_estado">Valor horas extras Junior</label>
                         <input type ="text" name="hr_jr" /><br>
                        
                        <label class="form_estado">Valor horas extras Pleno</label>
                        <input type ="text" name="hr_pl" /><br>
                         
                        <input type="submit" name="enviar" value="Cadastrar Sálario" />
                        
		</form>
	</body>
</html>


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Cadastrar Estado</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/estilo.css" />
    </head>
   
	<body>
            
            <h1>Cadastrar Estado</h1>
            
            <?php 
            
            	 
                  require_once 'Menu.html';
             ?>
            
            <form action="../Controller/CadastrarEstado.php" method="post">
                
			<label>Estado</label>
                        <input type="text" name="estado" /><br>
			
                        <label>UF</label>
                        <input type="text" name="uf" /><br><br>
			
			<input type="submit" value="Cadastrar Estado" />
		</form>
	</body>
</html>


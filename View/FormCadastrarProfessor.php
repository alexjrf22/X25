
<!DOCTYPE html>
<html>
    <head>
        <title>Cadastrar professor</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/estilo.css" />
    </head>
   
	<body>
            
            <h1>Cadastrar professor</h1>
            
            <?php require_once 'Menu.html'; ?>
            
            <form action="../Controller/CadastrarProfessor.php" method="post">
                
			<label class="form_estado">Nome</label>
                        <input type="text" name="professor" /><br>
			
                        <label class="form_estado">E-mail</label>
                        <input type="text" name="email" /><br>
                        
                        <label class="form_estado">Telefone</label>
                        <input type="text" name="telefone" /><br>
			
			<input type="submit" value="Cadastrar Professor" />
                        
		</form>
	</body>
</html>



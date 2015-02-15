<!DOCTYPE html>
<html>
    <head>
        <title>Cadastrar Perfil</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/estilo.css" />
    </head>
    <body>
        
        <h1>Cadastrar perfil</h1>
         <?php require_once 'Menu.html'; ?>
        <form action="../controller/CadastrarPerfil.php" method="post">
            
            <label for="perfil">Perfil</label>
            <input name="perfil" type="text" /><br><br>
            
            <input name="enviar"  type="submit" value="Salvar Perfil" />
                 
        </form>
        
    </body>
</html>

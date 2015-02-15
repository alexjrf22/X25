<?php

require_once '../autoload.php';

use Model\Perfil;

$obj = new Perfil();
$perfils = $obj->listarPerfis();

?>


<html>
    
    <head>
        <link rel="stylesheet" href="../css/estilo.css" />
        <title>Gerenciamento de Perfils</title>
        <meta charset="utf-8" />
    </head>
    
    <body>
        
        <h1>Gerenciamento de Perfils</h1> 
       
                   <?php require_once 'Menu.html'; ?>           

                 <FORM METHOD="LINK" ACTION="FormCadastrarPerfil.php"> 
            
            <INPUT TYPE="submit" VALUE="Novo Perfil" /> 
            
            </FORM>
        <table>
            
            <tr>
                <th>Perfil</th>
                <th colspan="2">Ações</th>
            </tr>
            
            <?php foreach ($perfils as $perfil): ?>
            
            <tr>
                <td><?php echo $perfil['perfil']; ?></td>  
                <td><a href="../Controller/DeletarPerfil.php?id=<?php echo $perfil['id_perfil']?>">Excluir Registro</a></td>
                <td><a href="../Controller/EditarPerfil.php?id=<?php echo $perfil['id_perfil']?>">Editar Registro</a></td> 
            </tr>
         
            <?php endforeach; ?>
            
        </table>

    </body>
    
</html>


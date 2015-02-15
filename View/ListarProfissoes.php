<?php

require_once '../autoload.php';

use Model\Profissao;

$obj = new Profissao();

$profissoes = $obj->listarProfissaoJoinSalarios();

?>


<html>
    
    <head>
        <link rel="stylesheet" href="../css/estilo.css" />
        <title>Gerenciamento de Profissões</title>
        <meta charset="utf-8" />
    </head>
    
    <body>
        
        <h1>Gerenciamento de Profissões</h1> 
       
                   <?php require_once 'Menu.html'; ?>           

                 <FORM METHOD="LINK" ACTION="FormCadastrarProfissao.php"> 
            
            <INPUT TYPE="submit" VALUE="Nova Profissão" /> 
            
            </FORM>
        <table>
            
            <tr>
                <th>Profissões</th>
                <th>Sálario Junior</th>
                <th>Sálario Pleno</th>
                <th>Horas Extras Junior</th>
                <th>Horas Extras Pleno</th>
                <th colspan="2">Ações</th>
            </tr>
            
            <?php foreach ($profissoes as $profissao): ?>
            
            <tr>
                <td><?php echo $profissao['profissao']; ?></td> 
                <td><?php echo $profissao['salario_jr']; ?></td> 
                <td><?php echo $profissao['salario_pleno']; ?></td> 
                <td><?php echo $profissao['val_hr_extra_jr']; ?></td> 
                <td><?php echo $profissao['val_hr_extra_pleno']; ?></td> 
                <td><a href="../Controller/DeletarProfissao.php?id=<?php echo $profissao['id_profissao']?>">Excluir Registro</a></td>
                <td><a href="../Controller/EditarProfissao.php?id=<?php echo $profissao['id_profissao']?>">Editar Registro</a></td> 
            </tr>
         
            <?php endforeach; ?>
            
        </table>

    </body>
    
</html>



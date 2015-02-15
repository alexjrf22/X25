<?php

require_once '../autoload.php';

use Model\Usuario;
use Model\Curso;

$obj_usuario = new Usuario();
$obj_curso = new Curso();

$usuarios = $obj_usuario->listarUsuarios();
$cursos = $obj_curso->listarCursos();

?>

<html>
    
    <head>
        <title>Efetuar Matrícula</title>
    </head>

    <h1>Efetuar Matrícula</h1>
    
<form action="../Controller/CadastrarMatricula.php" method="post">
    
    <label>Cursos</label>
    <select name="cursos">
        
        <?php foreach ($cursos as $curso): ?>
        
        <option value="<?php echo $curso['id_curso']; ?>"><?php echo $curso['curso']; ?></option>
        
        <?php endforeach; ?>
        
    </select><br>
    
    <label>Alunos</label>
    <select name="alunos">
        
        <?php foreach ($usuarios as $usuario): ?>
        
        <option value="<?php echo $usuario['id_usuario']; ?>"><?php echo $usuario['nome_usuario']; ?></option>
        
        <?php endforeach; ?>
        
    </select><br>
    
    <input type="submit" value="Efetuar Matrícula" />
    
</form>
    
</html>
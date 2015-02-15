<?php

require_once '../autoload.php';

use Model\Usuario;

$obj  = new Usuario();
$usuarios = $obj->listarUsuarios();

?>
<html>
	<head>
		<title> Cadastrar Carro </title>
                <meta charset="utf-8" />
                <link rel="stylesheet" href="../css/estilo.css" />
	</head>
	<body>
            
            <h1>Cadastrar Carro</h1>
          
          <?php require_once 'Menu.html';?>  
		<form action="../controller/CadastrarCarro.php" method="post">
                    
                        <label class="form_estado">Carro</label>
			<input type ="text" name="carro" /><br>
                        
                        <label class="form_estado">Modelo</label>
                        <input type ="text" name="modelo" /><br>
                        
                        <label class="form_estado">Dono</label>
                        <select name="dono">
				<?php foreach ( $usuarios as $usuario ):?>
					<option value="<?php echo $usuario['id_usuario']; ?>"><?php echo $usuario['nome_usuario']; ?></option>
				<?php endforeach;?>
			</select><br><br>
                        
                        <input type="submit" name="enviar" value="Cadastrar Carro" />
		</form>
	</body>
</html>

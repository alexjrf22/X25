<?php

namespace View;

require_once '../autoload.php';

use Model\Estado;

$estado  = new Estado();
$estados = $estado->listarUfs();

?>
<html>
	<head>
		<title> Cadastrar Cidade </title>
                <meta charset="utf-8" />
                <link rel="stylesheet" href="../css/estilo.css" />
	</head>
	<body>
            
            <h1>Cadastrar Cidade</h1>
            
            <?php require_once 'Menu.html';?>
            
		<form action="../controller/CadastrarCidade.php" method="post">
                    
                        <label class="form_estado">Cidade</label>
			<input type ="text" name="cidade" /><br>
                        
                        <label class="form_estado">Estado</label>
                        <select name="estado">
				<?php foreach ( $estados as $estado ):?>
					<option value="<?php echo $estado['id_estado']; ?>"><?php echo $estado['estado']; ?></option>
				<?php endforeach;?>
			</select><br><br>
                        
                        <input type="submit" name="enviar" value="Cadastrar Cidade" />
		</form>
	</body>
</html>

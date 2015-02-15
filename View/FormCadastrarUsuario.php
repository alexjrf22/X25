<?php

namespace View;

require_once '../autoload.php';

use Model\Perfil;
use Model\Estado;
use Model\Profissao;
use Model\Cidade;

$perfil       = new Perfil();
$estado       = new Estado();
$profissao    = new Profissao();
$cidade       = new Cidade();
$Perfis       = $perfil->listarPerfis();
$estados      = $estado->listarUfs();
$profissoes   = $profissao->listarProfissao();
$cidades      = $cidade->ListarCidades();

?>
<html>
	<head>
		<title> Cadastrar Usuário </title>
                <meta charset="utf-8" />
                <link rel="stylesheet" href="../css/estilo.css" />
	</head>
	<body>
            
            <h1>Cadastrar Usuário</h1>
          
          <?php require_once 'Menu.html' ;?>
            
		<form action="../controller/CadastrarUsuario.php" method="post">
                    
            <label class="form_estado">Nome</label>
			<input type ="text" name="nome" /><br>
                        
			<label class="form_estado">E-mail</label>
			<input type ="text" name="email" /><br>
                        
			<label class="form_estado">Selecione o Perfil</label>
			<select name="perfil">
				<?php foreach ( $Perfis as $Perfil ):?>
					<option value="<?php echo $Perfil['id_perfil']; ?>"><?php echo $Perfil['perfil']; ?></option>
				<?php endforeach;?>
			</select><br>
			
			<label class="form_estado">Selecione Profissão</label>
			<select name="profissao">
				<?php foreach ( $profissoes as $profissao ):?>
					<option value="<?php echo $profissao['id_profissao']; ?>"><?php echo $profissao['profissao']; ?></option>
				<?php endforeach;?>
			</select><br>
                        
                        <label class="form_estado">Selecione o Estado</label>
                        <select name="estado">
				<?php foreach ( $estados as $estado ):?>
					<option value="<?php echo $estado['id_estado']; ?>"><?php echo $estado['estado']; ?></option>
				<?php endforeach;?>
			</select><br>
                        
                        <label class="form_estado">Selecione a Cidade</label>
                        <select name="cidade">
				<?php foreach ( $cidades as $cidade ):?>
					<option value="<?php echo $cidade['id_cidade']; ?>"><?php echo $cidade['nome_cidade']; ?></option>
				<?php endforeach;?>
			</select><br><br>
                       
                        
                        <input type="submit" name="enviar" value="Cadastrar Usuário" />
		</form>
	</body>
</html>
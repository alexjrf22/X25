<?php

require_once '../autoload.php';

use Model\Usuario;
use Model\Perfil;
use Model\Profissao;
use Model\Estado;
use Model\Cidade;

$obj_usuario   = new Usuario();
$obj_perfil    = new Perfil();
$obj_profissao = new Profissao();
$obj_estado    = new Estado();
$obj_cidade    = new Cidade();
       
$id	             = $_GET['id'];
$where               = "id_usuario = {$id}";
$usuario_selecionado = $obj_usuario->buscarUsuario($where);

$perfils             = $obj_perfil->listarPerfis();
$profissoes          = $obj_profissao->listarProfissao();
$estados             = $obj_estado->listarUfs();
$cidades             = $obj_cidade->ListarCidades();

?>
<html>
	<head>
		<title> Editar Usúario </title>
                <link rel="stylesheet" href="../css/estilo.css" />
	</head>
	<body>
            <form action="CadastrarUsuario.php" method="post">
			<input type="hidden" name='id' value="<?php echo $usuario_selecionado ['id_usuario']?>" /><br>
			<label class="form_estado">Nome</label>
			<input type ="text" name="nome" value = "<?php echo $usuario_selecionado ['nome_usuario']?>" /><br>
			<label class="form_estado">E-mail</label>
			<input type ="text" name="email" value = "<?php echo $usuario_selecionado ['email_usuario']?>" /><br>
			<label class="form_estado">Perfil</label>
			<select name="perfil">
				<?php foreach ( $perfils as $perfil ):?>
					<?php 
						if ($usuario_selecionado['id_perfil'] == $perfil['id_perfil']) {
							$selected = "selected = 'selected'";
						}else{
							$selected = null;
						} 
					?>
					<option <?php echo $selected?> value="<?php echo $perfil['id_perfil'];?>"><?php echo $perfil['perfil'];?>
					</option>
				<?php endforeach;?>
			</select><br>
                        
                        <label class="form_estado" >Profissão</label>
                        <select name="profissao">
				<?php foreach ( $profissoes as $profissao ):?>
					<?php 
						if ($usuario_selecionado['id_profissao'] == $profissao['id_profissao']) {
							$selected = "selected = 'selected'";
						}else{
							$selected = null;
						} 
					?>
					<option <?php echo $selected?> value="<?php echo $profissao['id_profissao'];?>"><?php echo $profissao['profissao'];?>
					</option>
				<?php endforeach;?>
			</select><br>
                        
                        <label class="form_estado">Estado</label>
                        <select name="estado">
				<?php foreach ( $estados as $estado ):?>
					<?php 
						if ($usuario_selecionado['id_estado'] == $estado['id_estado']) {
							$selected = "selected = 'selected'";
						}else{
							$selected = null;
						} 
					?>
					<option <?php echo $selected?> value="<?php echo $estado['id_estado'];?>"><?php echo $estado['estado'];?>
					</option>
				<?php endforeach;?>
			</select><br>
                        
                        <label class="form_estado" >Cidade</label>
                        <select name="cidade">
				<?php foreach ( $cidades as $cidade ):?>
					<?php 
						if ($usuario_selecionado['id_cidade'] == $cidade['id_cidade']) {
							$selected = "selected = 'selected'";
						}else{
							$selected = null;
						} 
					?>
					<option <?php echo $selected?> value="<?php echo $cidade['id_cidade'];?>"><?php echo $cidade['nome_cidade'];?>
					</option>
				<?php endforeach;?>
			</select><br>
                        
			<input type="submit" value="Alterar Usuário" />
		</form>
	</body>
</html>


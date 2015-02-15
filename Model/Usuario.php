<?php

namespace Model;

use Model\Mysql;

class Usuario extends Mysql
{
	
	public function salvarUsuario($dados)
	{
		return parent::inserir("tb_usuario", $dados);
	}
	
	public function listarUsuariosJoinPerfil()
	{
		return parent::join('tb_usuario', 'tb_perfil', 'id_perfil', 'id_perfil');
	}
        
        public function listarUsuariosJoinEstado()
	{
		return parent::join('tb_usuario', 'tb_estado', 'id_estado', 'id_estado');
	}
	
	public function listarUsuariosJoinProfissao()
	{
		return parent::join('tb_usuario', 'tb_profissao', 'id_profissao', 'id_profissao');
	}
        
        public function listarUsuarios()
	{
		return parent::select('tb_usuario');
	}
	
	public function listarTudo()
	{
		$string = "select * from tb_usuario inner join tb_perfil using (id_perfil) 
				inner join tb_estado using (id_estado) 
				inner join tb_profissao using (id_profissao) inner join tb_salario using(id_salario)
                                inner join tb_cidade using(id_cidade) order by (id_usuario) asc";
		
		return parent::executarSql($string)->fetchAll();
		
	}
	
    public function buscarUsuario( $where )
    {
    	return parent::buscar('tb_usuario', $where);
    }
    
    public function editarUsuario( $campos ,$where )
    {
    
    	parent::editar('tb_usuario',$campos, $where);
    	
    }
    
    public function deletarUsuario($where)
    {
    	parent::excluir('tb_usuario', $where );
    }
    
	
}
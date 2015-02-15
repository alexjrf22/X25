<?php 

namespace Model;

use Model\Mysql;

class Estado extends Mysql
{
	public function listarUfs()
	{
		return parent::select("tb_estado");	
	}
        
        public function InserirEstado($dados)
	{
		return parent::inserir("tb_estado", $dados);	
	}
	
	public function deletarEstado($where)
	{
		parent::excluir('tb_estado', $where );
	}
	
	public function buscarEstado( $where )
	{
		return parent::buscar('tb_estado', $where);
	}
	
	public function editarEstado( $campos ,$where )
        {
		return parent::editar('tb_estado', $campos, $where);
	}
	
}


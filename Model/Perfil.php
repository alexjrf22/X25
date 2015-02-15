<?php

namespace Model;

use Model\Mysql;

class Perfil extends Mysql
{
	
	public function salvarPerfil($dados)
	{
		$this->inserir("tb_perfil", $dados);
	}
	
	public function listarPerfis()
	{
		return parent::select("tb_perfil");
	}
        
         public function buscarPerfil( $where )
        {
            return parent::buscar('tb_perfil', $where);
        }
    
        public function deletarPerfil($where)
        {
            parent::excluir('tb_perfil', $where );
        }

        public function EditarPerfil($campos, $where)
        {

            return parent::editar("tb_perfil", $campos, $where);

        }
	
}
<?php

namespace Model;

use Model\Mysql;

class Cidade extends Mysql
{
    
    public function InserirCidade($dados)
    {
        
        return parent::inserir("tb_cidade", $dados);
        
    }
    
    public function ListarCidades()
    {
       
        return parent::select("tb_cidade");
        
    }
    
    public function ListarCidadesJoinEstados()
    {
       
        return parent::join("tb_cidade", "tb_estado", "id_estado", "id_estado");
        
    }
    
    public function buscarCidade( $where )
    {
    	return parent::buscar('tb_cidade', $where);
    }
    
    public function deletarCidade($where)
    {
    	parent::excluir('tb_cidade', $where );
    }
    
    public function EditarCidade($campos, $where)
    {
        
        return parent::editar("tb_cidade", $campos, $where);
        
    }
       
}


<?php

namespace Model;

use Model\Mysql;

class Salario extends Mysql
{
    
    public function inserirSalario($dados)
    {
        
        return parent::inserir("tb_salario", $dados);
        
    }
    
    public function listarSalarios()
    {
        
        return parent::select("tb_salario");
        
    }
    
   
    public function listarSalariosJoinProfissoes()
    {
        
        return parent::join("tb_salario", "tb_profissao", "id_salario", "id_salario");
        
    }
    
    public function editarSalario( $campos ,$where )
    {
    
    	parent::editar('tb_salario',$campos, $where);
    	
    }
    
    public function buscarSalario( $where )
    {
    	return parent::buscar('tb_salario', $where);
    }
    
    public function deletarSalario($where)
    {
    	parent::excluir('tb_salario', $where );
    }
      
}



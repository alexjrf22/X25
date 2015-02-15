<?php

namespace Model;

use Model\Mysql;

class Curso extends Mysql
{
    
    public function inserirCurso($dados)
    {
        
        return parent::inserir("tb_curso", $dados);
        
    }
    
    public function listarCursos()
    {
        
        return parent::select("tb_curso");
        
    }
    
   
    public function listarCursosJoinProfessores()
    {
        
        return parent::join("tb_curso", "tb_professor", "id_professor", "id_professor");
        
    }
    
    public function editarCurso( $campos ,$where )
    {
    
    	return parent::editar('tb_curso',$campos, $where);
    	
    }
    
    public function buscarCurso( $where )
    {
    	return parent::buscar('tb_curso', $where);
    }
    
    public function deletarCurso($where)
    {
    	parent::excluir('tb_curso', $where );
    }
   
}





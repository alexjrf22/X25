<?php

namespace Model;

use Model\Mysql;

class Professor extends Mysql
{
    
    public function inserirProfessor($dados)
    {
        
        return parent::inserir("tb_professor", $dados);
        
    } 
    
    public function listarProfessores()
    {
        
        return parent::select("tb_professor");
        
    } 
    
     public function buscarProfessor( $where )
        {
            return parent::buscar('tb_professor', $where);
        }
    
        public function deletarProfessor($where)
        {
            parent::excluir('tb_professor', $where );
        }

        public function EditarProfessor($campos, $where)
        {

            return parent::editar("tb_professor", $campos, $where);

        }
    
}


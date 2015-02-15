<?php

namespace Model;

use Model\Mysql;

class Matricula extends Mysql
{
    
    public function efetuarMatricula($dados)
    {
        
        return parent::inserir("tb_matricula", $dados);
        
    }
    
    public function listarMatriculas()
    {
        
         $string = "select * from tb_matricula inner join tb_usuario using(id_usuario)"
               . "inner join tb_curso using(id_curso)";
       return parent::executarSql($string);
        
    }
      
 
    public function buscarMatricula( $where )
    {
    	return parent::buscar('tb_matricula', $where);
    }
    
    public function deletarMatricula($where)
    {
    	parent::excluir('tb_matricula', $where );
    }
     
}





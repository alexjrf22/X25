<?php

namespace Model;

use Model\Mysql;

class Profissao extends Mysql
{
    
    public function inserirProfissao($dados)
    {
        
        return parent::inserir("tb_profissao", $dados);
        
    }
    
    public function listarProfissao()
    {
        
        return parent::select("tb_profissao");
        
    }
    
    public function listarProfissaoJoinSalarios()
    {
        $tring = "select * from tb_profissao inner join tb_salario using (id_salario)";
        return parent::executarSql($tring);
        
    }
    
       public function buscarProfissao( $where )
        {
            return parent::buscar('tb_profissao', $where);
        }
    
        public function deletarProfissao($where)
        {
            parent::excluir('tb_profissao', $where );
        }

        public function EditarProfissao($campos, $where)
        {

            return parent::editar("tb_profissao", $campos, $where);

        }
    
    
}


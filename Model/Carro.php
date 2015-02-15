<?php

namespace Model;

use Model\Mysql;

class Carro extends Mysql
{
    
    public function inserirCarro($dados)
    {
        
        return parent::inserir("tb_carro", $dados);
        
    }
    
    public function listarCarros()
    {
        
        return parent::select("tb_carro");
        
    }
    
    public function listarCarrosJoinUsuarios()
    {
        
        return parent::join("tb_carro", "tb_usuario", "id_usuario", "id_usuario");
        
    }
    
    public function editarCarro( $campos ,$where )
    {
    
    	parent::editar('tb_carro',$campos, $where);
    	
    }
    
    public function buscarCarro( $where )
    {
    	return parent::buscar('tb_carro', $where);
    }
    
    public function deletarCarro($where)
    {
    	parent::excluir('tb_carro', $where );
    }
    
    public function inativarCarro($where)
    {
    	parent::inativar('tb_carro', $where);
    }
    
    public function ListarCarrosOrdenados()
    {
        $string = "select * from tb_carro inner join tb_usuario using (id_usuario) order by id_carro asc";
        return parent::executarSql($string);
        
    }
    
    
}


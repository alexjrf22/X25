<?php

namespace Model;

use Model\Factory;
use PDO;

class Mysql
{
    private static $con;
   
    public function connect()
    {
    	$arrayConexao = array(
					"host" 	   => "127.0.0.1",
					"dbname"   => "db_projeto",	
					"username" => "root",
					"password" => ""
				);
    	
        if (!isset(self::$con)) {
            self::$con = Factory::factory($arrayConexao);
        }

        return self::$con;
    }
    
    public function select($tableName)
    {
    	$this->connect();
    	$query = self::$con->query("SELECT * FROM {$tableName}"); 
    	return $query->fetchAll();
    }
    
    public function join( $tbFrom, $tableJoin, $idTabela1, $idTabela2 )
    {
    	$this->connect();
    	
    	$query  = "Select *";
    	$query .= " FROM {$tbFrom} ";
    	$query .= " inner join  {$tableJoin} on {$tableJoin}.{$idTabela1} = {$tbFrom}.{$idTabela2}";
    	$query = self::$con->query($query);
    	
    	return $query->fetchAll();
    }
    
    public function inserir( $tableName, $values )
    {
    	$this->connect();
    	$insert  = "INSERT INTO {$tableName} "; 
    	$insert .= $this->inserirChaves($values);
    	$insert .= $this->inserirValues($values);
    	self::$con->query($insert);
    }
    
    public function editar( $tableName, $campos, $where)
    {
    	$this->connect();
    	 
    	$sql = " UPDATE {$tableName} SET {$campos} WHERE {$where}";
        self::$con->query($sql);
    }
    
    public function buscar( $tableName, $where )
    {
    	$this->connect();
    	
    	$sql = " SELECT * FROM {$tableName} WHERE {$where}";
    	
    	$consulta = self::$con->query($sql);
    	
    	return $consulta->fetch(PDO::FETCH_ASSOC);
    }
    
    public function excluir( $tableName, $where )
    {
    	$this->connect();
    	$deletar = " DELETE FROM {$tableName} WHERE {$where}";
    	self::$con->query($deletar);
    	
    }
    
    private function inserirChaves( $values )
    {
    	$insert = "(";
    	foreach ( $values as $chave => $valor ){
    		$insert .= $chave . ",";
    	}
    	$insert = substr($insert, 0, strlen($insert) - 1);
    	$insert .= ")";
    	
    	return $insert; 
    }
    
 	private function inserirValues( $values )
    {
    	$insert = " values (";
    	foreach ( $values as $chave => $valor ){
    		$insert .= "'{$valor}',";
    	}
    	$insert = substr($insert, 0, strlen($insert) - 1);
    	$insert .= ");";
    	
    	
    	return $insert; 
    }
    
    public function executarSql($string)
    {
    	$this->connect();
    	return self::$con->query($string);
    }
    
    public function inativar($tableName, $where) {
    	$this->connect ();
    
    	$sql = " UPDATE {$tableName} SET ativo = 0 WHERE {$where}";
    	self::$con->query ( $sql );
    }
    
    public function DataParaBR($dataUS)
    {
        
        $data   = explode ('-', $dataUS);
        $dataBR = $data[2] . '/' . $data[1] . '/' . $data[0];
        return $dataBR;
        
    }
    
     public function DataParaUS($dataBR)
    {
        
        $data   = explode ('/', $dataBR);
        $dataUS = $data[2] . '-' . $data[1] . '-' . $data[0];
        return $dataUS;
        
    }

}

?>
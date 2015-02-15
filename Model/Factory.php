<?php

namespace Model;

use PDO;

class Factory
{
    // M�todo Factory parametrizado
    public static function factory( $arrayConexao )
    {
    	
       
	   $con = new PDO(  "mysql:host={$arrayConexao['host']};dbname={$arrayConexao['dbname']}",
       					 $arrayConexao['username'],
       					 $arrayConexao['password'],
                                         array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
           $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       
           return $con;
    }
    
}
?>

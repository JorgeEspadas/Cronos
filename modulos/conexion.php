<?php
class Conexion{
    /*
     * Retorna el objeto de conexion :v no se si este bien porfavor revisalo.
     * Se que se usa el "require once" en estas cosas de base de datos.
     * No se si esta bien manejarlo como un objeto tal cual a lo java.       
     */
   function getConnection(){
        require_once('reader.php');
        $config = reader::readJSON('../config/mysql_config.json');
        
     $conn = mysqli_connect($config["IP"], $config["USR"], $config["PWD"], $config["DB"]);
       mysqli_set_charset($conn,"UTF8");
       
      return $conn;
       
    }   
}
?>

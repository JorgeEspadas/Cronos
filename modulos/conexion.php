<?php
class Conexion{
   function getConnection(){
        require_once('reader.php');
        $config = reader::readJSON('../config/mysql_config.json');
        //no se por que sacaste esto del return :v
        $conn = mysqli_connect($config["IP"], $config["USR"], $config["PWD"], $config["DB"]);
        mysqli_set_charset($conn,"UTF8");       
      return $conn;
    }   
}
?>

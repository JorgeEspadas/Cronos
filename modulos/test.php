<html>
    <body>
        <?php
//         include('reader.php');
//         $reader = new reader();
//         $config = $reader::readJSON("../config/mysql_config.json");         
//         echo $config["IP"];
        
        include('conexion.php');
        $con = new Conexion();
        $test = $con::getConnection();
        
        //madre santisima :v.
        if ($result = $test->query("SELECT * FROM alumno", MYSQLI_USE_RESULT)) {
                while($fila = mysqli_fetch_array($result)) {
                    echo $fila['matricula_alumno'] . "<br>"; // Print a single column data
                    //echo print_r($fila);       // Print the entire row data
                }
        $result->close();       
        }
        
        ?>
    </body>
</html>
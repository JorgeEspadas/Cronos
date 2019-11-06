<?php
    include('conexion.php');
    $con = new Conexion();
        
    $test = $con::getConnection();       
  
    function alert($header_message, $text_information,$type_message){
     $alert_message = '<div class="alert '.$type_message.'" id="alert">
             <h4 class="alert-heading">'.$header_message.'</h4>
             <hr>
             <p>'.$text_information.'</p>
         </div>';
     return $alert_message;
    }

    if(isset($_POST['id_empleado']) &&isset($_POST['nombre']) && isset($_POST['apellidos'])&& isset($_POST['correo'])
            && isset($_POST['password']) &&isset($_POST['ubicacion'])&&isset($_POST['matricula_alumno'])){
               
                $id_empleado = $_POST['id_empleado']; 
                $nombre = $_POST['nombre'];
                $apellidos = $_POST['apellidos'];
                $correo = $_POST['correo'];
                $password = $_POST['password'];
                $ubicacion = $_POST['ubicacion'];
                $matricula_alumno = $_POST['matricula_alumno'];
       
        $sql = "INSERT INTO asesor (id_empleado, nombre, apellidos, correo, password, ubicacion, matricula_alumno) 
        VALUES('$id_empleado','$nombre','$apellidos','$correo','$password','$ubicacion','$matricula_alumno')";

        $result = mysqli_query($test, $sql);
           
         if(!$result){
             
         }
         echo alert('Correcto','Docente Agregado', 'alert-success');
          
    }else{
//        header("Location:nuevo_docente.php");

    }
     
//        if(!$result )
// 	{
//            die('Ocurrio un error al obtener los valores de la base de datos: ' . mysqli_error());
//        }else{
//        }

 ?>


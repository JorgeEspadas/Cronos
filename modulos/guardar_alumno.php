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
    
    if(isset($_POST['matricula_alumno']) &&isset($_POST['nombre']) && isset($_POST['apellidos'])&& isset($_POST['correo'])
            && isset($_POST['password']) &&isset($_POST['licenciatura'])&&isset($_POST['semestre'])&&isset($_POST['estado'])
            &&isset($_POST['id_horario'])){
   
    
          $matricula = $_POST['matricula_alumno']; 
          $nombre = $_POST['nombre'];
          $apellidos= $_POST['apellidos'];
          $correo = $_POST['correo'];
          $password = $_POST['password'];
          $licenciatura = $_POST['licenciatura'];
          $semestre = $_POST['semestre'];
          $grupo= $_POST['grupo'];
          $estado= $_POST['estado'];
          $id_horario=$_POST['id_horario'] ;
            
          
           $sql = "INSERT INTO alumno (matricula_alumno, nombre, apellidos, correo, password, licenciatura, semestre, grupo, estado,id_horario) 
          VALUES('$matricula','$nombre','$apellidos','$correo','$password','$licenciatura','$semestre','$grupo','$estado',$id_horario)";

         $result = mysqli_query($test, $sql);
           
         if(!$result){
             
         }
         echo alert('','Alumno guardado', 'alert-success');
          

    }else{
      //  header("Location:nuevo_alumno.php");

    }
  

  
   
  
  

  
 

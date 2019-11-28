<?php

    
    include('conexion.php');
    $con = new Conexion();
        
    $test = $con::getConnection();       
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
         ?>
         
        <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Hecho! </strong> Alumno guardado.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php
          

    }else{
      //  header("Location:nuevo_alumno.php");

    }
  

  
   
  
  

  
 

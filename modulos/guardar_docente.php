<?php

    
    include('conexion.php');
    $con = new Conexion();
        
    $test = $con::getConnection();       
  

    if(isset($_POST['id_empleado']) &&isset($_POST['nombre']) && isset($_POST['apellidos'])&& isset($_POST['correo'])
            && isset($_POST['password']) &&isset($_POST['ubicacion'])&&isset($_POST['matricula_alumno'])){
   
    
          $id_empleado = $_POST['id_empleado']; 
          $nombre = $_POST['nombre'];
          $apellidos= $_POST['apellidos'];
          $correo = $_POST['correo'];
          $password = $_POST['password'];
          $ubicacion = $_POST['ubicacion'];
          $matricula_alumno = $_POST['matricula_alumno'];
       
            
           

    }else{
        header("Location:nuevo_docente.php");

    }
  

  
    $sql = "INSERT INTO asesor (id_empleado, nombre, apellidos, correo, password, ubicacion, matricula_alumno) 
          VALUES('$id_empleado','$nombre','$apellidos','$correo','$password','$ubicacion','$matricula_alumno')";

    $result = mysqli_query($test, $sql);
  
  

  
 
     
        if(!$result )
 	{
            die('Ocurrio un error al obtener los valores de la base de datos: ' . mysqli_error());
        }
            
        
  

 ?>

 <html lang="es">

    <head>
        <meta charset = "utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/bootstrap-theme.css" rel="stylesheet">
        <script src="../js/jquery-3.4.1.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>

    </head>

    <body>
      <div class="container">
        <div class="row">
          <div class="row" style="text-align:center">
            <?php
            if($result){ ?>
              <h3> Registro Guardado </h3>
            <?php 
            
            }else{ 
                ?>
              <h3> Error al guardar </h3>
            <?php  
            
            } ?>

              <a href="listar_docentes.php" class ="btn btn-default">Regresar</a>
          </div>
        </div>
      </div>
    </body>
 </html>

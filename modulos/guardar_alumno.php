<?php

    
    include('conexion.php');
    $con = new Conexion();
        
    $test = $con::getConnection();       
  

    if(isset($_POST['matricula']) &&isset($_POST['nombre']) && isset($_POST['apellidos'])&& isset($_POST['correo'])
            && isset($_POST['password']) &&isset($_POST['licenciatura'])&&isset($_POST['semestre'])&&isset($_POST['estado'])
            &&isset($_POST['horario'])){
   
    
          $matricula = $_POST['matricula']; 
          $nombre = $_POST['nombre'];
          $apellidos= $_POST['apellidos'];
          $correo = $_POST['correo'];
          $password = $_POST['password'];
          $licenciatura = $_POST['licenciatura'];
          $semestre = $_POST['semestre'];
          $grupo= $_POST['grupo'];
          $estado= $_POST['estado'];
          $id_horario=$_POST['horario'] ;
            
           

    }else{
        header("Location:nuevo_alumno.php");

    }
  

  
    $sql = "INSERT INTO alumno (matricula_alumno, nombre, apellidos, correo, password, licenciatura, semestre, grupo, estado,id_horario) 
          VALUES('$matricula','$nombre','$apellidos','$correo','$password','$licenciatura','$semestre','$grupo','$estado',$id_horario)";

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

              <a href="listar_alumnos.php" class ="btn btn-default">Regresar</a>
          </div>
        </div>
      </div>
    </body>
 </html>

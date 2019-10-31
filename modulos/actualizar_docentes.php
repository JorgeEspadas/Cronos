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
	$sql = "UPDATE asesor  SET   nombre='$nombre', apellidos='$apellidos', correo='$correo', password='$password',ubicacion='$ubicacion',matricula_alumno='$matricula_alumno' where id_empleado = '$id_empleado'";
	$result = mysqli_query($test, $sql);
?>
 
<html lang="es">
	<head>
		
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="../css/bootstrap.min.css" rel="stylesheet">
            <link href="../css/bootstrap-theme.css" rel="stylesheet">
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
					<?php if($result) { ?>
						<h3>REGISTRO MODIFICADO</h3>
						<?php } else { ?>
						<h3>ERROR AL MODIFICAR</h3>
					<?php } ?>
					
                                            <a href="listar_docentes.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
	</body>
</html>
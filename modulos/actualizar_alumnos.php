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
    }else{
          header("Location:listar_alumnos.php");
    }
	
	
	
	$sql = "UPDATE alumno  SET   nombre='$nombre', apellidos='$apellidos', correo='$correo', password='$password', licenciatura='$licenciatura',semestre='$semestre',grupo='$grupo', estado='$estado', id_horario='$id_horario' where matricula_alumno = '$matricula'";
	$result = mysqli_query($test, $sql);

	
?>
 
<html lang="es">
	<head>
		
            <meta charset="utf-8">
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
					<?php if($result) { ?>
						<h3>REGISTRO MODIFICADO</h3>
						<?php } else { ?>
						<h3>ERROR AL MODIFICAR</h3>
					<?php } ?>
					
                                            <a href="listar_alumnos.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
	</body>
</html>
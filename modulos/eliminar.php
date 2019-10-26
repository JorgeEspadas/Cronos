<?php
 include('conexion.php');
        $con = new Conexion();
        
        $test = $con::getConnection();
        
        if(isset($_GET['matricula_alumno'])){
        $id = $_GET['matricula_alumno'];
        }else{
             header("Location:listar_alumnos.php");
        }
        
        $sql = "DELETE from alumno where  matricula_alumno = '$id'";
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
				<h3>REGISTRO ELIMINADO</h3>
				<?php } else { ?>
				<h3>ERROR AL ELIMINAR</h3>
				<?php } ?>
				
				<a href="listar_alumnos.php" class="btn btn-primary">Regresar</a>
				
				</div>
			</div>
		</div>
        </body> 


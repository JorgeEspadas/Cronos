<?php
 include('conexion.php');
        $con = new Conexion();
        
        $test = $con::getConnection();
        
        if(isset($_GET['id_empleado'])){
        $id = $_GET['id_empleado'];
        }else{
             header("Location:listar_docentes.php");
        }
        
        $sql = "DELETE from asesor where id_empleado = '$id'";
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
				
                                <a href="listar_docentes.php" class="btn btn-primary">Regresar</a>
				
				</div>
			</div>
		</div>
        </body> 


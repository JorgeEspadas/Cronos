<?php

    include('conexion.php');
        $con = new Conexion();
        
        $test = $con::getConnection();
        
        if(isset($_GET['id_empleado'])){
        
	$id = $_GET['id_empleado'];
        }else{
            header("Location:listar_docentes.php");
        }
	
	$sql = "SELECT * FROM asesor where id_empleado = '$id'";
        
        $result = mysqli_query($test, $sql);
	
	$row = mysqli_fetch_array($result);
	
        $query="select matricula_alumno , nombre from alumno";
        $resultado = mysqli_query($test, $query);
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
			
            <h3 class="text-center">Modificar Docente con Matrícula <?php echo " ".$id ;?></h3>
		

            <form class="form-horizontal" method="POST" action="actualizar_docentes.php" autocomplete="off">
                            
                <div class="form-group">
                    <label for="id_empleado" class="col-sm-2 control-label">Matricula</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="id_empleado" name="id_empleado" value="<?php echo $row['id_empleado']; ?>" maxlength="5" placeholder="ID Empleado" required pattern="[0-9]+">
                        </div>
                </div>
                            
                <div class="form-group">
                    <label for="nombre" class="col-sm-2 control-label">Nombre</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $row['nombre']; ?>" placeholder="Nombre" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s]+">
			</div>
                </div>

                <div class="form-group">
                    <label for="apellidos" class="col-sm-2 control-label">Apellidos</label>
			<div class="col-sm-10">
                            <input type="text" class="form-control" id="apellidos" name="apellidos" value="<?php echo $row['apellidos']; ?>" placeholder="Apellidos" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s]+">
			</div>
                </div>

                <div class="form-group">
                    <label for="correo" class="col-sm-2 control-label">Correo</label>
			<div class="col-sm-10">
                            <input type="email" class="form-control" id="correo" name="correo" value="<?php echo $row['correo']; ?>" placeholder="Correo Institucional" required="required">
			</div>
                </div>
                
                <div class="form-group">
                    <label for="password" class="col-sm-2 control-label">Contraseña</label>
			<div class="col-sm-10">
                            <input type="password" class="form-control" id="password" name="password" maxlength="8" value="<?php echo $row['password']; ?>" placeholder="Contraseña" required="required">
			</div>
                </div>
                            
                
                
                            
                <div class="form-group">
                    <label for="ubicacion" class="col-sm-2 control-label">Ubicación</label>
			<div class="col-sm-10">
                            <input type="text" class="form-control" id="ubicacion"  name="ubicacion" value="<?php echo $row['ubicacion']; ?>" placeholder="Ubicación" required="required">
			</div>
                </div>
                            
                
                <div class="form-group">
                    <label for="matricula_alumno" class="col-sm-2 control-label">Seleccione Alumno</label>
			<div class="col-sm-10">
                            <select class="form-control" id="matricula_alumno" name="matricula_alumno" required="">
                                 <?php 
                                while($datos = mysqli_fetch_array($resultado))
                                {  ?>
                            <option value="<?php echo $datos['matricula_alumno'].$datos['nombre']?>"> <?php echo $datos['matricula_alumno'].' - '.$datos['nombre']?> </option>
                                <?php
                                }  ?> 
                            </select>
			</div>
                </div>
		
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
                            <a href="listar_docentes.php" class="btn btn-default">Regresar</a>
                            <button type="submit" value="enviar" name="enviar " value="enviar"class="btn btn-primary">Guardar</button>
			</div>
		</div>
            </form>
        </div>
	</body>
</html>

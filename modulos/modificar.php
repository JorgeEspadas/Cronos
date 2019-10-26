<?php

    include('conexion.php');
        $con = new Conexion();
        
        $test = $con::getConnection();
        
        if(isset($_GET['matricula_alumno'])){
        
	$id = $_GET['matricula_alumno'];
        }else{
            header("Location:listar_alumnos.php");
        }
	
	$sql = "SELECT * FROM alumno where matricula_alumno = '$id'";
        
        $result = mysqli_query($test, $sql);
	
	$row = mysqli_fetch_array($result);
	
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
			
            <h3 class="text-center">Modificar Alumno Con Matricula: <?php echo " ".$id;?></h3>
		
            
            <form class="form-horizontal" method="POST" action="actualizar_alumnos.php" autocomplete="off">
                            
                <div class="form-group">
                    <label for="matricula_alumno" class="col-sm-2 control-label">Matricula</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="matricula_alumno" value="<?php echo $row['matricula_alumno']; ?>" name="matricula_alumno" maxlength="5" placeholder="matricula" required pattern="[0-9]+">
                        </div>
                </div>
                            
                <div class="form-group">
                    <label for="nombre" class="col-sm-2 control-label">Nombre</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nombre" value="<?php echo $row['nombre']; ?> "name="nombre" placeholder="Nombre" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s]+">
			</div>
                </div>

                <div class="form-group">
                    <label for="apellidos" class="col-sm-2 control-label">Apellidos</label>
			<div class="col-sm-10">
                            <input type="text" class="form-control" id="apellidos" value="<?php echo $row['apellidos']; ?>" name="apellidos" placeholder="Apellidos" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s]+">
			</div>
                </div>

                <div class="form-group">
                    <label for="correo" class="col-sm-2 control-label">Correo</label>
			<div class="col-sm-10">
                            <input type="email" class="form-control" id="correo" value="<?php echo $row['correo']; ?>" name="correo" placeholder="Correo Institucional" required="required">
			</div>
                </div>
                
                <div class="form-group">
                    <label for="password" class="col-sm-2 control-label">Contraseña</label>
			<div class="col-sm-10">
                            <input type="text" class="form-control" id="password" value="<?php echo $row['password']; ?>" name="password" maxlength="8" placeholder="Contraseña" required="required">
			</div>
                </div>
                            
                <div class="form-group">
                    <label for="licenciatura" class="col-sm-2 control-label">Licenciatura</label>
			<div class="col-sm-10">
                            <input type="text" class="form-control" id="licenciatura" value="<?php echo $row['licenciatura']; ?>" name="licenciatura" placeholder="Licenciatura" required>
			</div>
		</div>
                            
                <div class="form-group">
                    <label for="semestre" class="col-sm-2 control-label">Semestre</label>
			<div class="col-sm-10">
                            <input type="number" class="form-control" id="semestre" value="<?php echo $row['semestre']; ?>" min="1" max="10" name="semestre" placeholder="Semestre" required>
			</div>
                </div>
                            
                <div class="form-group">
                    <label for="grupo" class="col-sm-2 control-label">Grupo</label>
			<div class="col-sm-10">
                            <input type="text" class="form-control" id="grupo" value="<?php echo $row['grupo']; ?>" maxlength="1" name="grupo" placeholder="Grupo" required pattern="[A-Za-z]">
			</div>
                </div>
                            
                <div class="form-group">
                    <label for="estado" class="col-sm-2 control-label">Estado</label>
			<div class="col-sm-10">
                            <select class="form-control" id="estado" name="estado" value="<?php echo $row['estado']; ?>" required="">
                                <option value="activo">Activo</option>
                                <option value="Ausente">Ausente</option>
                                                
                            </select>
			</div>
                </div>
                
                <div class="form-group">
                    <label for="horario" class="col-sm-2 control-label">Horario</label>
			<div class="col-sm-10">
                            <input type="number" class="form-control" id="id_horario" value="<?php echo $row['id_horario']; ?>" min="1" max="2" name="id_horario" placeholder="Horario" required >
			</div>
                </div>

				

				
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
                            <a href="listar_alumnos.php" class="btn btn-default">Regresar</a>
                            <button type="submit" value="enviar" name="enviar " value="enviar"class="btn btn-primary">Guardar</button>
			</div>
		</div>
            </form>
        </div>
		
	</body>
</html>
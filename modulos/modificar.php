<?php
    include('conexion.php');
        // Simon. xd
        $test = conexion::getConnection();
        
        if(isset($_POST['mod'])){
            //update llamado.
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
              

                $sql = "UPDATE alumno SET matricula_alumno ='$matricula', nombre = '$nombre', apellidos ='$apellidos', correo='$correo',password='$password',licenciatura='$licenciatura',semestre='$semestre',grupo='$grupo',id_horario='$id_horario' WHERE matricula_alumno ='$matricula';";
                $result = mysqli_query($test, $sql);
            
            
            if(!$result){
                echo mysqli_error($test);
                ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Chale </strong> Ocurrio un problema con la comunicacion de la base de datos :v
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                <?php
            }
            ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Hecho! </strong> Cambios Guardados
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
            <?php
        }      
        }else if(isset($_POST['del'])){
            if(isset($_POST['matricula_alumno']) &&isset($_POST['nombre']) && isset($_POST['apellidos'])&& isset($_POST['correo'])
            && isset($_POST['password']) &&isset($_POST['licenciatura'])&&isset($_POST['semestre'])&&isset($_POST['estado'])
            &&isset($_POST['id_horario'])){
                
                $matricula = $_POST['matricula_alumno']; 
                
                $sql = "DELETE FROM alumno WHERE matricula_alumno ='$matricula';";
                $result = mysqli_query($test, $sql);
                    if(!$result ){
                    echo mysqli_error($test);
                    ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Chale </strong> Ocurrio un problema con la comunicacion de la base de datos :v
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                    <?php
                    }
                ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Hecho! </strong> El Usuario ha sido borrado.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                    <?php
                    header("Refresh:3; url=../housekeeper/alumnos.php");
                }
            }

            if(isset($_POST['matricula_alumno'])){       
                $id = $_POST['matricula_alumno'];
            }else{
                //header("Location:listar_alumnos.php"); not yet
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
	</head>
	
	<body>
            <div class="container">		
            <h3 class="text-center">Modificar Alumno Con Matricula: <?php echo "".$id;?></h3>
            
            <form class="form-horizontal" method="POST" action="" autocomplete="off">
                            
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
			<div class="col-sm-offset-2 col-sm-12 text-center">
                            <button type="submit" value="enviar" name="del" value="enviar"class="btn btn-primary center-block">Eliminar</button>
                            <button type="submit" value="enviar" name="mod" value="enviar"class="btn btn-primary center-block">Guardar</button>
			</div>
		</div>
            </form>
        </div>		
	</body>
</html>
<?php

    include('conexion.php');
        $con = new Conexion();
        
        $test = $con::getConnection();
        
        if(isset($_POST['mod'])){
            if(isset($_POST['id_empleado']) &&isset($_POST['nombre']) && isset($_POST['apellidos'])&& isset($_POST['correo'])
            && isset($_POST['password']) &&isset($_POST['ubicacion'])){
               
                $id_empleado = $_POST['id_empleado']; 
                $nombre = $_POST['nombre'];
                $apellidos = $_POST['apellidos'];
                $correo = $_POST['correo'];
                $password = $_POST['password'];
                $ubicacion = $_POST['ubicacion'];
                
                $sql = "UPDATE asesor SET id_empleado ='$id_empleado', nombre = '$nombre', apellidos ='$apellidos', correo='$correo',password='$password',ubicacion='$ubicacion' WHERE id_empleado ='$id_empleado';";
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
            if(isset($_POST['id_empleado']) &&isset($_POST['nombre']) && isset($_POST['apellidos'])&& isset($_POST['correo'])
            && isset($_POST['password']) &&isset($_POST['ubicacion'])){
               
                $id_empleado = $_POST['id_empleado']; 
                
                $sql = "DELETE FROM asesor WHERE id_empleado ='$id_empleado';";
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
                    header("Refresh:3; url=../housekeeper/asesor.php");
            }
        }
        
        if(isset($_POST['id_empleado'])){       
                $id = $_POST['id_empleado'];
            }else{
            }

            $sql = "SELECT * FROM asesor where id_empleado = '$id'";      
            $result = mysqli_query($test, $sql);
            
            $row = mysqli_fetch_array($result);
	
            $query="select matricula_alumno , nombre from alumno";
            $resultado = mysqli_query($test, $query);
        
?>
<div class="container">
    <div class="row d-block">
        <h3 class="text-center my-5">Modificar Docente con Matrícula <?php echo " ".$id ;?></h3>


        <form class="form-horizontal p-0 m-0" method="POST" action="" autocomplete="off">

            <div class="form-group d-sm-flex">
                <label for="id_empleado" class="h5 col-sm-2 col-lg-1 control-label">Matricula</label>
                    <div class="col-sm-10 col-lg-11 pl-sm-5">
                        <input type="text" class="form-control" id="id_empleado" name="id_empleado" value="<?php echo $row['id_empleado'];?>" maxlength="5" placeholder="ID Empleado" required pattern="[0-9]+">
                    </div>
            </div>

            <div class="form-group d-sm-flex">
                <label for="nombre" class="h5 col-sm-2 col-lg-1 control-label">Nombre</label>
                    <div class="col-sm-10 col-lg-11 pl-sm-5">
                        <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $row['nombre']; ?>" placeholder="Nombre" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s]+">
                    </div>
            </div>

            <div class="form-group d-sm-flex">
                <label for="apellidos" class="h5 col-sm-2 col-lg-1 control-label">Apellidos</label>
                    <div class="col-sm-10 col-lg-11 pl-sm-5">
                        <input type="text" class="form-control" id="apellidos" name="apellidos" value="<?php echo $row['apellidos']; ?>" placeholder="Apellidos" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s]+">
                    </div>
            </div>

            <div class="form-group d-sm-flex">
                <label for="correo" class="h5 col-sm-2 col-lg-1 control-label">Correo</label>
                    <div class="col-sm-10 col-lg-11 pl-sm-5">
                        <input type="email" class="form-control" id="correo" name="correo" value="<?php echo $row['correo']; ?>" placeholder="Correo Institucional" required="required">
                    </div>
            </div>

            <div class="form-group d-sm-flex">
                <label for="password" class="h5 col-sm-2 col-lg-1 control-label">Contraseña</label>
                    <div class="col-sm-10 col-lg-11 pl-sm-5">
                        <input type="text" class="form-control" id="password" name="password" maxlength="8" value="<?php echo $row['password']; ?>" placeholder="Contraseña" required="required">
                    </div>
            </div>




            <div class="form-group d-sm-flex">
                <label for="ubicacion" class="h5 col-sm-2 col-lg-1 control-label">Ubicación</label>
                    <div class="col-sm-10 col-lg-11 pl-sm-5">
                        <input type="text" class="form-control" id="ubicacion"  name="ubicacion" value="<?php echo $row['ubicacion']; ?>" placeholder="Ubicación" required="required">
                    </div>
            </div>


            <div class="form-group d-block d-md-flex">
                <label for="matricula_alumno" class="col-12 col-md-2 col-lg-1 h5 control-label">Seleccione Alumno</label>
                    <div class="form-group col-12 col-md-5 pl-md-5 col-lg-4">
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

            <div class="form-group d-sm-flex ml-2 mt-5 mr-sm-3">
                    <div class="mr-sm-3 mb-3">
                            <button type="submit" value="enviar" name="mod" class="btn btn-secondary btn-lg offset-1 col-10 col-sm-auto">Guardar</button>
                    </div>
                    <div class="mr-auto mr-sm-1 mb-3 mb-sm-0">
                       <button type="submit" value="enviar" name="del" class="btn btn-outline-secondary btn-lg offset-1 col-10 col-sm-auto">Eliminar</button> 
                    </div> 
                    <div class="mb-3 mr-auto order-sm-first">
                            <a class="btn btn-outline-secondary btn-lg offset-1 col-10 col-sm-auto" href="../housekeeper/asesor.php">Regresar</a>
                    </div>  
            </div>
        </form>
    </div>
</div>

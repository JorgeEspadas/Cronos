<?php
$sql ="select matricula_alumno , nombre from alumno";
$result = mysqli_query($test, $sql);

?>
<div class="container collapse" id="agregar" data-parent="#accordion-main" aria-labelledby="headingTwo">
    <div class="row d-block">
        <h3 class=" mb-5 h2 col-12">Registrar Nuevo Docente</h3>


        <form class="form p-0 m-0" method="POST" action="../modulos/guardar_docente.php" id="add">
         
                 <div class="form-group d-sm-flex">
                    <label for="id_empleado" class="h5 col-sm-2 col-lg-1 control-label">Matricula</label>
                        <div class="col-sm-10 col-lg-11 pl-sm-5">
                            <input type="text" class="form-control" id="id_empleado" name="id_empleado" maxlength="5" placeholder="ID Empleado" required pattern="[0-9]+">
                        </div>
                </div>

                <div class="form-group d-sm-flex">
                    <label for="nombre" class="h5 col-sm-2 col-lg-1 control-label">Nombre</label>
                        <div class="col-sm-10 col-lg-11 pl-sm-5">
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s]+">
                        </div>
                </div>

                <div class="form-group d-sm-flex">
                    <label for="apellidos" class="h5 col-sm-2 col-lg-1 control-label">Apellidos</label>
                        <div class="col-sm-10 col-lg-11 pl-sm-5">
                            <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s]+">
                        </div>
                </div>

                <div class="form-group d-sm-flex">
                    <label for="correo" class="h5 col-sm-2 col-lg-1 control-label">Correo</label>
                        <div class="col-sm-10 col-lg-11 pl-sm-5">
                            <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo Institucional" required="required">
                        </div>
                </div>

                <div class="form-group d-sm-flex">
                    <label for="password" class="h5 col-sm-2 col-lg-1 control-label">Contraseña</label>
                        <div class="col-sm-10 col-lg-11 pl-sm-5">
                            <input type="password" class="form-control" id="password" name="password" maxlength="8" placeholder="Contraseña" required="required">
                        </div>
                </div>


                <div class="form-group d-sm-flex">
                    <label for="ubicacion" class="h5 col-sm-2 col-lg-1 control-label">Ubicación</label>
                        <div class="col-sm-10 col-lg-11 pl-sm-5">
                            <input type="text" class="form-control" id="ubicacion"  name="ubicacion" placeholder="Ubicación" required="required">
                        </div>
                </div>


                <div class="form-group d-block d-md-flex">
                    <label for="matricula_alumno" class="col-12 col-md-2 col-lg-1 h5 control-label">Seleccione Alumno</label>
                        <div class="form-group col-12 col-md-5 pl-md-5 col-lg-4">
                            <select class="form-control" id="matricula_alumno" name="matricula_alumno" required="">
                                 <?php 
                                while($datos = mysqli_fetch_array($result))
                                {  ?>
                            <option value="<?php echo $datos['matricula_alumno'].$datos['nombre']?>"> <?php echo $datos['matricula_alumno'].' - '.$datos['nombre']?> </option>
                                <?php
                                }  ?> 
                            </select>
                        </div>
                </div>

               <!-- Botones -->
                <div class="form-group col-12  mt-2">
                        <div class=" d-block d-sm-flex justify-content-end mr-auto mr-sm-3 ">
                            <!--<a class="btn btn-outline-secondary mr-5" href="../housekeeper/alumnos.php">Regresar</a>-->
                            <input type="submit" value="Guardar" name="enviar " class="btn btn-lg btn-outline-secondary btn-lg offset-1 col-10 col-sm-auto">
                        </div>
                </div>
            </div>
        </form>
    </div>
</div>  

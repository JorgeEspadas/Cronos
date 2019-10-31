<?php
$sql ="select matricula_alumno , nombre from alumno";
$result = mysqli_query($test, $sql);

?>
<div class="container collapse" id="agregar" data-parent="#accordion-main" aria-labelledby="headingTwo">

    <h3 class="text-center">Registrar Nuevo Docente</h3>


    <form class="form-horizontal" method="POST" action="guardar_docente.php" autocomplete="off">

        <div class="form-group">
            <label for="id_empleado" class="col-sm-2 control-label">Matricula</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="id_empleado" name="id_empleado" maxlength="5" placeholder="ID Empleado" required pattern="[0-9]+">
                </div>
        </div>

        <div class="form-group">
            <label for="nombre" class="col-sm-2 control-label">Nombre</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s]+">
                </div>
        </div>

        <div class="form-group">
            <label for="apellidos" class="col-sm-2 control-label">Apellidos</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s]+">
                </div>
        </div>

        <div class="form-group">
            <label for="correo" class="col-sm-2 control-label">Correo</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo Institucional" required="required">
                </div>
        </div>

        <div class="form-group">
            <label for="password" class="col-sm-2 control-label">Contraseña</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="password" name="password" maxlength="8" placeholder="Contraseña" required="required">
                </div>
        </div>


        <div class="form-group">
            <label for="ubicacion" class="col-sm-2 control-label">Ubicación</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="ubicacion"  name="ubicacion" placeholder="Ubicación" required="required">
                </div>
        </div>


        <div class="form-group">
            <label for="matricula_alumno" class="col-sm-2 control-label">Seleccione Alumno</label>
                <div class="col-sm-10">
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


        <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <a href="listar_docentes.php" class="btn btn-default">Regresar</a>
                    <button type="submit" value="enviar" name="enviar " value="enviar"class="btn btn-primary">Guardar</button>
                </div>
        </div>
    </form>
</div>
<div class="container collapse" id="agregar" data-parent="#accordion-main" aria-labelledby="headingTwo">
    <div class="row">
        <h3 class=" mb-5 h2 col-12">Registrar Nuevo Alumno</h3>

        <form class="form m-0 p-0" method="POST" action="guardar_alumno.php" autocomplete="off">
            <div class="row d-flex p-0 m-0 col-12">

                <!-- Matricula -->
                <div class="form-group d-sm-flex col-12">
                <label for="matricula" class="h5 col-1 control-label">Matricula:</label>
                    <div class="col-11 pl-sm-5">
                        <input type="text" class="form-control" id="matricula_alumno" name="matricula_alumno" maxlength="5" placeholder="matricula" required pattern="[0-9]+">
                    </div>
                </div>

                <!-- Nombre -->
                <div class="form-group d-sm-flex col-12">
                    <label for="nombre" class="col-1 h5  control-label">Nombre:</label>
                        <div class="col-11 pl-sm-5">
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s]+">
                        </div>
                </div>

                <!-- Apellidos -->
                <div class="form-group d-sm-flex col-12">
                    <label for="apellidos" class="col-1 h5 control-label">Apellidos:</label>
                        <div class="col-11 pl-sm-5">
                            <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s]+">
                        </div>
                </div>

                <!-- Correo -->
                <div class="form-group d-sm-flex col-12">
                    <label for="correo" class="col-1 h5 control-label">Correo:</label>
                        <div class="col-11 pl-sm-5">
                            <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo Institucional" required="required">
                        </div>
                </div>

                <!-- Contraseña -->
                <div class="form-group d-sm-flex col-12">
                    <label for="password" class="col-1 h5 control-label">Contraseña:</label>
                        <div class="col-11 pl-sm-5">
                            <input type="password" class="form-control" id="password" name="password" maxlength="8" placeholder="Contraseña" required="required">
                        </div>
                </div>

                <!-- Licenciatura -->
                <div class="form-group d-sm-flex col-12">
                    <label for="licenciatura" class="col-1 h5 -label">Licenciatura:</label>
                        <div class="col-11 pl-sm-5">
                            <input type="text" class="form-control" id="licenciatura" name="licenciatura" placeholder="Licenciatura" required>
                        </div>
                </div>

                <!-- Semestre -->
                <div class="form-group d-sm-flex col-12">
                    <label for="semestre" class="col-1 h5 control-label">Semestre:</label>
                        <div class="col-11 pl-sm-5">
                            <input type="number" class="form-control" id="semestre" min="1" max="10" name="semestre" placeholder="Semestre" required>
                        </div>
                </div>

                <!-- grupo -->
                <div class="form-group d-sm-flex col-12">
                    <label for="grupo" class="col-1 h5 control-label">Grupo:</label>
                        <div class="col-11 pl-sm-5">
                            <input type="text" class="form-control" id="grupo" maxlength="1" name="grupo" placeholder="Grupo" required pattern="[A-Za-z]">
                        </div>
                </div>


                <!-- Estado de servicio -->
                <div class="form-group d-sm-flex col-12">
                    <label for="estado" class="col-1 h5 control-label">Estado:</label>
                        <div class="form-group col-11 col-sm-4 col-md-3 col-xl-2 pl-sm-5">
                            <select class="form-control" id="estado" name="estado" required="">
                                <option value="activo">Activo</option>
                                <option value="Ausente">Ausente</option>
                            </select>
                        </div>
                </div>

                <!-- Horario -->
                <div class="form-group d-sm-flex col-12">
                    <label for="horario" class="col-1 h5 control-label">Horario</label>
                        <div class="form-group col-11 col-sm-4 col-md-3 col-xl-2 pl-sm-5">
                            <input type="number" class="form-control" id="id_horario" min="1" max="2" name="id_horario" placeholder="Horario" required >
                        </div>
                </div>

                <!-- Botones -->
                <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <a href="listar_alumnos.php" class="btn btn-default">Regresar</a>
                            <button type="submit" value="enviar" name="enviar " value="enviar"class="btn btn-primary">Guardar</button>
                        </div>
                </div>
            </div> 
        </form>
    </div>
</div>
<?php
    include('../modulos/footer.php');
?>
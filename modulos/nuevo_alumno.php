<div class="container collapse" id="agregar" data-parent="#accordion-main" aria-labelledby="headingTwo">
    <div class="row d-block">
        <p class=" mb-5 h2 col-12">Registrar Nuevo Alumno</p>

        <form class="form-horizontal m-0 p-0" method="POST" id="add" action="../modulos/guardar_alumno.php" autocomplete="off">
            
                <!-- Matricula -->
                <div class="form-group d-sm-flex">
                <label for="matricula" class="h5 col-sm-2 col-lg-1 control-label">Matricula</label>
                    <div class="col-sm-10 col-lg-11 pl-sm-5">
                        <input type="text" class="form-control" id="matricula_alumno" name="matricula_alumno" maxlength="5" placeholder="matricula" required pattern="[0-9]+">
                    </div>
                </div>

                <!-- Nombre -->
                <div class="form-group d-sm-flex">
                    <label for="nombre" class="col-sm-2 col-lg-1 h5 control-label">Nombre</label>
                        <div class="col-sm-10 col-lg-11 pl-sm-5">
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s]+">
                        </div>
                </div>

                <!-- Apellidos -->
                <div class="form-group d-sm-flex">
                    <label for="apellidos" class="col-sm-2 col-lg-1 h5 control-label">Apellidos</label>
                        <div class="col-sm-10 col-lg-11 pl-sm-5">
                            <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s]+">
                        </div>
                </div>

                <!-- Correo -->
                <div class="form-group d-sm-flex">
                    <label for="correo" class="col-sm-2 col-lg-1 h5 control-label">Correo</label>
                        <div class="col-sm-10 col-lg-11 pl-sm-5">
                            <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo Institucional" required="required">
                        </div>
                </div>

                <!-- Contraseña -->
                <div class="form-group d-sm-flex">
                    <label for="password" class="col-sm-2 col-lg-1 h5 control-label">Contraseña</label>
                        <div class="col-sm-10 col-lg-11 pl-sm-5">
                            <input type="password" class="form-control" id="password" name="password" maxlength="8" placeholder="Contraseña" required="required">
                        </div>
                </div>

                <!-- Licenciatura -->
                <div class="form-group d-sm-flex">
                    <label for="licenciatura" class="col-sm-2 col-lg-1 h5 -label" style="font-size: 19px;">Licenciatura</label>
                        <div class="col-sm-10 col-lg-11 pl-sm-5">
                            <input type="text" class="form-control" id="licenciatura" name="licenciatura" placeholder="Licenciatura" required>
                        </div>
                </div>

                <!-- Semestre y grupo -->
                <div class="form-group d-sm-flex">
                    <label for="semestre" class="col-12 col-sm-2 col-lg-1 h5 control-label">Semestre</label>
                        <div class="form-group col-12 col-sm-4 col-md-4 col-lg-5 col-xl-3 pl-sm-5">
                            <input type="number" class="form-control" id="semestre" min="1" max="10" name="semestre" placeholder="Semestre" required>
                        </div>
                    
                    <label for="grupo" class="col-12 col-sm-2 col-lg-1 h5 control-label">Grupo</label>
                        <div class="form-group col-12 col-sm-4 col-md-4 col-lg-5 col-xl-3 pl-sm-5">
                            <input type="text" class="form-control" id="grupo" maxlength="1" name="grupo" placeholder="Grupo" required pattern="[A-Za-z]">
                        </div>
                </div>


                <!-- Estado de servicio y horario -->
                <div class="form-group d-sm-flex">
                    <label for="estado" class="col-12 col-sm-2 col-lg-1 h5 control-label">Estado</label>
                        <div class="form-group col-12 col-sm-4 col-md-4 col-lg-5 col-xl-3 pl-sm-5">
                            <select class="form-control" id="estado" name="estado" required="">
                                <option value="activo">Activo</option>
                                <option value="Ausente">Ausente</option>
                            </select>
                        </div>
                    
                    <label for="horario" class="col-12 col-sm-2 col-lg-1 h5 control-label">Horario</label>
                        <div class="form-group col-12 col-sm-4 col-md-4 col-lg-5 col-xl-3 pl-sm-5">
                            <input type="number" class="form-control" id="id_horario" min="1" max="2" name="id_horario" placeholder="Horario" required >
                        </div>
                </div>

                <!-- Botones -->
                <div class="form-group col-12  mt-2">
                        <div class=" d-block d-sm-flex justify-content-end mr-auto mr-sm-3 ">
                            <!--<a class="btn btn-outline-secondary mr-5" href="../housekeeper/alumnos.php">Regresar</a>-->
                            <button type="submit" value="enviar" name="enviar " value="enviar" class="btn btn-lg btn-outline-secondary btn-lg offset-1 col-10 col-sm-auto">Guardar</button>
                        </div>
                </div>
        </form>
    </div>
</div>
<?php         
    include_once('conexion.php');

    $test = conexion::getConnection();

    $sql = "select * from asesor;";
     $result = mysqli_query($test, $sql);

    if(!$result )
    {
        die('Ocurrio un error al obtener los valores de la base de datos: ' . mysqli_error());
    }

?>
<div class="collapse show container-fluid px-sm-5" id="ver" data-parent="#accordion-main" aria-labelledby="headingOne">	
    <div class="table-responsive px-sm-5">
        <table class="table table-striped table-hover  ">
            <thead>
                <tr class =text-center>
                    <th scope="col">Matricula</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Ubicación</th>
                    <th scope="col" >Alumno(s)</th>
                    <th scope="col">Editar</th>

                </tr>
            </thead>		
            <tbody>
                <?php while($row = $result->fetch_array(MYSQLI_ASSOC)) { ?>
                    <tr>				
                        <td> <?php echo $row['id_empleado'] ?></td>
                        <td> <?php echo $row['nombre'] ?></td>
                        <td> <?php echo $row['apellidos'] ?></td>
                        <td> <?php echo $row['correo'] ?></td>
                        <td> <?php echo $row['ubicacion'] ?></td>
                        <td> <?php echo $row['matricula_alumno'] ?></td>
                        <form method="post" action="../housekeeper/editor_docente.php">
                           <input type="hidden" name="id_empleado" value="<?php echo $row['id_empleado']?>">
                           <td><input type="image" name="mod" src="../image/editar.png" width="25px" alt="Editar"></td>
                        </form>


                     <!--<td> <a href="modificar_docente.php?id_empleado="><img src="../image/editar.png" width="25px"alt="Editar" title="Modificar" ></a> </td>
                        <td> <a href="eliminar_docente.php?id_empleado="><img src="../image/eliminar.png" width="25px"alt="Eliminar" title="Eliminar" ></a> </td>-->
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
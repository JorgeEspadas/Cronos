<html lang="en">
    <head>
        <meta charset="utf-8">     
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <script src="../css/js/jquery-3.4.1.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>	
    </head>
    <body>
        <?php         
        include_once('conexion.php');
        //aaaa se mamaron.
        //include('../housekeeper/alumnos.php');
        
        $test = conexion::getConnection();

        $sql = "select * from asesor;";
         $result = mysqli_query($test, $sql);
        
        if(!$result )
 	{
            die('Ocurrio un error al obtener los valores de la base de datos: ' . mysqli_error());
 	}
        
        ?>
        <div class="container"><br>
            
             <a href="nuevo_docente.php" class="btn btn-primary">Añadir Nuevo Docente</a>  <br> <br>
             
           
             		
            <div class="table-responsive">
		<table class="table table-striped table-hover  ">
		    <thead>
                    
                            <tr class =text-center>
                                <th>Matricula</th>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Correo</th>
                                <th>Ubicación</th>
                                <th>Alumno(s)</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                                
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
                                <td> <a href="modificar_docente.php?id_empleado=<?php echo $row['id_empleado']; ?>"><img src="../image/editar.png" width="25px"alt="Editar" title="Modificar" ></a> </td>
                                <td> <a href="eliminar_docente.php?id_empleado=<?php echo $row['id_empleado']; ?>"><img src="../image/eliminar.png" width="25px"alt="Eliminar" title="Eliminar" ></a> </td>

                            </tr>
			<?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
		
    </body>
</html>
      
    

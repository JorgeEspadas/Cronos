<html lang="en">
    <head>
        <meta charset="utf-8">     
    	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<script src="../js/bootstrap.min.js"></script>	
    </head>
    <body>
        <?php         
        include_once('conexion.php');
        
        $test = conexion::getConnection();

                
        if(isset($_POST['filtro'])){
            if($_POST['filtro']=="todos"){
                $sql = "select * from alumno;";
            }else{
                $sql = "select * from alumno where semestre = ".$_POST['filtro'].";";
            }
  	}else{
  		$sql = "select * from alumno;";
  	}
       
         $result = mysqli_query($test, $sql);
        
        if(!$result )
 	{
            die('Ocurrio un error al obtener los valores de la base de datos: ' . mysqli_error());
 	}
        
        ?>
        <div class="container"><br>
            
             <a href="../modulos/nuevo_alumno.php" class="btn btn-secondary mt-3 mb-3">Añadir Nuevo Alumno</a>  <br> <br>
             
             <form class="" action="" method="post" >
                 <div class="d-flex justify-content-start align-items-center mb-4">
                     <div class="form-group mr-4">
                         <label class="h6 text-center">Semestre:</label>
                     </div>
                    <div class="form-group mr-4">
                        <select  class="form-control" name="filtro">
                        <option class=""value="todos">Todos</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                     </select>
                    </div>
                     <div class="form-group mr-3">
                        <button class="btn btn-secondary" type="submit">Filtrar</button>
                     </div>
                </div>
              </form>
             		
            <div class="table-responsive">
		<table class="table table-striped table-hover">
		    <thead>
                        <tr class ="text-center">
                            <th scope="col">Matricula</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellidos</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Licenciatura</th>
                            <th scope="col">Semestre</th>
                            <th scope="col">Grupo</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Horario</th>
                            <th scope="col">Editar</th>

                        </tr>
                    </thead>		
                    <tbody>
                        <?php while($row = $result->fetch_array(MYSQLI_ASSOC)) { ?>
                            <tr>
                                <td> <?php echo $row['matricula_alumno'] ?></td>
                                <td> <?php echo $row['nombre'] ?></td>
                                <td> <?php echo $row['apellidos'] ?></td>
                                <td> <?php echo $row['correo'] ?></td>
                                <td> <?php echo $row['licenciatura'] ?></td>
                                <td> <?php echo $row['semestre'] ?></td>
                                <td> <?php echo $row['grupo'] ?></td>
                                <td> <?php echo $row['estado']?></td>
                                <td> <?php echo $row['id_horario'] ?></td>
                                <form method="post" action="../housekeeper/editor.php">
                                           <input type="hidden" name="matricula_alumno" value="<?php echo $row['matricula_alumno']?>">
                                           <td><input type="image" name="mod" src="../image/editar.png" width="25px" alt="Editar"></td>
                                </form>
                            </tr>
			<?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
		
    </body>
</html>
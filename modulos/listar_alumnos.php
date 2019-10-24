<html lang="en">
    
    <head>
        <meta charset="utf-8">
      
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<link href="../css/bootstrap-theme.css" rel="stylesheet">
		<script src="../js/jquery-3.4.1.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>	
                
    </head>
    <body>
        <?php    
        
        include('conexion.php');
        $con = new Conexion();
        
        $test = $con::getConnection();

                
        if(isset($_POST['filtro'])){
            switch($_POST['filtro'] ){
  		case "todos":
                    $sql = "select * from alumno;";
  			break;
  		case "1":
                    $sql = "select * from alumno where semestre =1;";
  			break;
                case "2":
                    $sql = "select * from alumno where semestre =2;";
  			break;
  		case "3":
                    $sql = "select * from alumno where semestre =3;";
  			break;
                case "4":
                    $sql = "select * from alumno where semestre =4;";
  			break;
  		case "5":
                    $sql = "select * from alumno where semestre =5;";
  			break;
                case "6":
                   $sql = "select * from alumno where semestre =6;";
  			break;
  		case "7":
                    $sql = "select * from alumno where semestre =7;";
  			break;
                case "8":
                    $sql = "select * from alumno where semestre =8;";
  			break;
                case "9":
                    $sql = "select * from alumno where semestre =9;";
  			break;
                case "10":
                    $sql = "select * from alumno where semestre =10;";
  			break;


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
            
             <a href="nuevo_alumno.php" class="btn btn-primary">Añadir Nuevo Alumno</a>  <br> <br>
             
            <form action="listar_alumnos.php" method="post" >
                <label>Semestre:</label>
                <br>
                 <select  class="form-control" name="filtro">
                 <option value="todos">Todos</option>
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
                <br>

                    <button type="submit"  class="btn btn-default">Filtrar</button>
              </form>
             		
            <div class="table-responsive">
		<table class="table table-striped table-hover  ">
		    <thead>
                            <tr class =text-center>
                                <th>Matricula</th>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Correo</th>
                                <th>Licenciatura</th>
                                <th>Semestre</th>
                                <th>Grupo</th>
                                <th>Estado</th>
                                <th>Horario</th>
                                
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
                            </tr>
						<?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
		
    </body>
</html>
      
    
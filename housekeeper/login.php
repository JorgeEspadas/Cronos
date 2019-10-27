<html>
    <head>
        <title>Inicio de Sesion</title>
        <link rel = "stylesheet" href = "../css/style-register.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta charset = "utf-8">
        <link rel="shortcut icon" href="../image/logo-apolo.jpg">
    </head>
    <body>
        <?php
            session_start();
            if(!empty($_POST)){
                if(isset($_POST['id_empleado']) && isset($_POST['password'])){
                    require_once('conexion.php');
                    $con = conexion::getConnection();
                    $stmt = $con->prepare('SELECT * FROM asesor WHERE id_empleado = ?');
                    $stmt->bind_param('s', $_POST['id_empleado']);                   
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $user = $result->fetch_object();                  
                    if($user == null){
                        echo '<main class = "container d-flex justify-content-center align-items-center" id="accordion-main" >
                                    <div class="row card  d-block" style="width: 18rem;">
                                        <div class="card-body  text-center">
                                            <h4 class="card-text">El usuario introducido no existe.</h4>
                                        </div>
                                    </div>
                                </main>';
                        header("Refresh:3; url=../housekeeper/acceso.php");
                    }else{
                        //SEGURIDAD NULA. Lo corregire apenas haga el modulo de hashing.
                        if ($_POST['password'] == $user->password) {
                            $_SESSION['session_id'] = $user->id_empleado;
                            echo '<main class = "container d-flex justify-content-center align-items-center" id="accordion-main" >
                                    <div class="row card  d-block" style="width: 18rem;">
                                        <div class="card-body  text-center">
                                            <h4 class="card-text">Bienvenido al Sistema.</h4>
                                        </div>
                                    </div>
                                </main>';
                            header("Refresh:3; url=../housekeeper/home.php");
                        } else {
                        //Login incorrecto.
                            echo '<main class = "container d-flex justify-content-center align-items-center" id="accordion-main" >
                                    <div class="row card  d-block" style="width: 18rem;">
                                        <div class="card-body  text-center">
                                            <h4 class="card-text">Password Incorrecto</h4>
                                        </div>
                                    </div>
                                </main>';
                            header("Refresh:3; url=../housekeeper/acceso.php");
                        }
                    $con -> close();
                    }
                }   
            }
        ?>
    </body>
</html>
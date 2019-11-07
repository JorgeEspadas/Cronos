<html>
    <head>
        <title>Inicio de Sesion</title>
        <link rel = "stylesheet" href = "../css/estilos.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="../fonts/ionicons.min.css">
        <meta charset = "utf-8">
        <link rel="shortcut icon" href="../image/logo-apolo.jpg">
    </head>
    <body>
        <?php
            session_start();
            if(!empty($_POST)){
                if(isset($_POST['id_empleado']) && isset($_POST['password'])){
                    require_once('../modulos/conexion.php');
                    $con = conexion::getConnection();
                    $stmt = $con->prepare('SELECT * FROM asesor WHERE id_empleado = ?');
                    $stmt->bind_param('s', $_POST['id_empleado']);                   
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $user = $result->fetch_object();                  
                    if($user == null){
                        echo '<div class="col-3  alert alert-warning text-center pt-4" id="alert" style="transform: translate(150%, 0%);">
                                <p>El usuario introducido no existe.</p>
                            </div>';
                      header("Refresh:2; url=../housekeeper/acceso.php");
                    }else{
                        //SEGURIDAD NULA. Lo corregire apenas haga el modulo de hashing.
                        if ($_POST['password'] == $user->password) {
                            $_SESSION['session_id'] = $user->id_empleado;
                            header("Refresh:2; url=../housekeeper/home.php");
                        } else {
                        //Login incorrecto.
                            echo '<div class="col-3  alert alert-warning text-center pt-4" id="alert" style="transform: translate(150%, 0%);">
                                <p>Password Incorrecta.</p>
                            </div>';
                            header("Refresh:2; url=../housekeeper/acceso.php");
                        }
                    $con -> close();
                    }
                }   
            }
        ?>
    <div class="login-dark">
        <form method="post" action="login.php" style="padding-top:60px;  padding-bottom: 40px;  transform: translate(-50%, -40%);">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration" style="margin-bottom: 30px;"><i class="icon ion-ios-locked-outline"></i></div>
            <div class="form-group"><input class="form-control" type="text" name="id_empleado" id="id_empleado" placeholder="ID. De Empleado" required autofocus></div>
            <div class="form-group"><input class="form-control" type="password" name="password" id="password" placeholder="Password" required></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Ingresar</button></div>
            <!--<a class="forgot" href="#">Forgot your email or password?</a>-->
            </form>
        </div>
        <script src="../js/jquery-3.4.1.min.js"></script>
        <script src="../js/popper.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
    </body>
</html>
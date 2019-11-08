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
                echo '<div class="col-4 alert alert-warning text-center pt-4 fixed-top" id="alert">
                        <h5>El usuario introducido no existe.</h5>
                    </div>';
            }else{
                //SEGURIDAD NULA. Lo corregire apenas haga el modulo de hashing.
                if ($_POST['password'] == $user->password) {
                    $_SESSION['session_id'] = $user->id_empleado;
                    echo '<div class="col-4 alert alert-success text-center pt-4 fixed-top" id="alert">
                        <h4>Bienvenido.</h4>
                    </div>';
                } else {
                //Login incorrecto.
                    echo '<div class="col-4 alert alert-warning text-center pt-4 fixed-top" id="alert">
                        <h5>Password Incorrecta.</h5>
                    </div>';
                }
            $con -> close();
            }
        }   
    }
?>
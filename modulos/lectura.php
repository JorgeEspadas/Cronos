<?php
include('conexion.php');

$con = conexion::getConnection();


function fail_message(){
    $fail ='<div class="alert alert-danger" id="success-alert">
            <h4 class="alert-heading">Acceso Denegado</h4>
            <hr>
            <p>Verifica que tu credencial no tenga el codigo de barras deteriorado o que haz sido dado de alta en el sistema.</p>
        </div>';
    echo $fail;
}

function success_login(){
    $success ='<div class="alert alert-success" id="success-alert">
            <h4 class="alert-heading">Acceso Correcto</h4>
            <hr>
            <p>Bienvenido $username (no implementado)</p>
            </div>';
    echo $success;
}

function success_logout(){
    $logout ='<div class="alert alert-warning" id="success-alert">
            <h4 class="alert-heading">Salida Correcta</h4>
            <hr>
            <p>Ten un buen dia $username (no implementado)</p>
            </div>';
    
    echo $logout;
}

if(isset($_POST['matricula'])){
    $matricula = $_POST['matricula'];
    
    $sql = "SELECT * FROM alumno where matricula_alumno = '$matricula'";      
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    
    if(!$result){
        fail_message();
    }else if($row['estado'] == "ausente"){
       //login, ejecutamos query cambiando el estado y mandamos mensaje. sencillo, no? :v
        $sql = "UPDATE alumno SET estado='activo' WHERE matricula_alumno='$matricula';";
        $result = mysqli_query($con, $sql);
        return success_login();
    }else if($row['estado'] == "activo"){
        $sql = "UPDATE alumno SET estado='ausente' WHERE matricula_alumno='$matricula';";
        $result = mysqli_query($con, $sql);
        return success_logout();
    }
}


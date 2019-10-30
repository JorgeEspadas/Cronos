<?php
include('conexion.php');

$con = conexion::getConnection();

/*
 * Esta funcion muestra un alert, recibe como parametros 3 valores.
 * header_alert es el texto para el emcabeszado en el mensaje
 *  text_information es la información del mensaje
 * type_text es una de las clases de bootsrap 4 para pintar un mensaje alert
 **/
function alert($header_message, $text_information,$type_message){
     $alert_message = '<div class="alert '.$type_message.'" id="alert">
             <h4 class="alert-heading">'.$header_message.'</h4>
             <hr>
             <p>'.$text_information.'</p>
         </div>';
     return $alert_message;
}

if(isset($_POST['matricula'])){
    date_default_timezone_set('America/Mexico_City');
    $matricula = $_POST['matricula'];
    
    $sql = "SELECT * FROM alumno where matricula_alumno = '$matricula'";      
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    
    $hora_entrada = strtotime("17:30");
    $hora_registro = strtotime(date("H").":".date("i"));
    $hora_salida = strtotime("20:32");
     
    
    if(!$result){
        
    }else if($row['estado'] == "ausente"){
        if(($hora_entrada/10 - $hora_registro/10)< -90 && ($hora_registro/10 - $hora_salida/10)>-60){
            return alert('Aun no es tu hora!','Registrate en el turno correcto.', 'alert-danger');
        }else{
            //login, ejecutamos query cambiando el estado y mandamos mensaje. sencillo, no? :v
            $sql = "UPDATE alumno SET estado='activo' WHERE matricula_alumno='$matricula';";
            $result = mysqli_query($con, $sql);
            return alert('Acceso Correcto','Bienvenido $username (no implementado)', 'alert-success');
        }
    }else if($row['estado'] == "activo"){
        if(($hora_entrada/10 - $hora_registro/10)>= -90 || ($hora_registro/10 - $hora_salida/10)<-60){
            return alert('Registro ya realizado','Ya has registrado tu Hora de entrada, espera tu salida para el siguiente registro.', 'alert-secondary');
        }else {
            $sql = "UPDATE alumno SET estado='ausente' WHERE matricula_alumno='$matricula';";
            $result = mysqli_query($con, $sql);
            return alert('Salida Correcta','Ten un buen dia $username (no implementado)', 'alert-warning');
        }
    }else{
        return alert('Acceso Denegado','Verifica que tu credencial no tenga el codigo de barras deteriorado o que haz sido dado de alta en el sistema.', 'alert-danger');
    }
}
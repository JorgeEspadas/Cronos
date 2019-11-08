<?php  
    $hk = "../housekeeper/"; // Ah, para los links. xdddd queria usar $_SERVER REQUEST URI pero mejor uso una variable fija :v
?>
<!DOCTYPE html>
<html lang = "es">
    <head>
        <title>Registro</title>
        <link rel="stylesheet" href="../css/style_menu.css">
        <link rel="stylesheet" href="../css/estilos_content.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta charset = "utf-8">
        <link rel="shortcut icon" type="image/x-icon" href="../image/logoApolo_2.png">
    </head>
    <body>       
        <?php
            session_start();
            if (isset( $_SESSION['session_id'] ) ) {
                // Deja accesar a la pagina loguedo.
                
            } else {
                // Redirect a la pagina de acceso :v
                header("Location: acceso.php");
            }
        ?>

    <!--ENCABEZADO-->
        <header>
            <nav class = "navbar navbar-dark navbar-expand-md">
                <div class = "container-fluid">
                   <a class = "navbar-brand"><img class = "" src="../image/logo-apolo.jpg" alt="LOGO-APOLO" width="75" height="auto"></a>
                   <button type="button" class = "navbar-toggler" data-toggle = "collapse" data-target = "#menu" aria-controls="menu" aria-expanded = "false" aria-label="Desplegar menu"><spam class="navbar-toggler-icon"></spam></button>
                    <div class = "collapse navbar-collapse" id = "menu">                       
                        <ul class = "navbar-nav ml-auto">                           
                            <li class = "nav-item mr-5"><a href="<?php echo $hk . "home.php" ?>" class = "nav-link text-white">Inicio</a></li>
                            <li class = "nav-item mr-5"><a href="<?php echo $hk . "asesor.php" ?>" class = "nav-link text-white">Asesores</a></li>
                            <li class = "nav-item mr-5"><a href="<?php echo $hk . "alumnos.php" ?>" class = "nav-link text-white">Alumnos</a></li>
                            
                            <li class = "nav-item"><a href="logout.php" class = "nav-link text-white">Salir</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    
    <div id="content"></div>
    
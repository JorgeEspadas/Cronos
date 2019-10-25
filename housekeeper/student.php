<!DOCTYPE html>
<html lang = "es">
    <head>
        <title>Registro</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta charset = "utf-8">
        <link rel="shortcut icon" type="../image/x-icon" href="image/favicon.ico">
    </head>
    <body>
        <header>
            <nav class = "navbar navbar-dark bg-secondary navbar-expand-md">
                <div class = "container-fluid">
                    <a class = "navbar-brand"><img class = "" src="../image/logo-apolo.jpg" alt="LOGO-APOLO" width="75" height="auto"></a>

                    <button type="button" class = "navbar-toggler" data-toggle = "collapse" data-target = "#menu" aria-controls="menu" aria-expanded = "false" aria-label="Desplegar menu"><spam class="navbar-toggler-icon"></spam></button>

                    <div class = "collapse navbar-collapse" id = "menu">
                        <ul class = "navbar-nav ml-auto">
                            <li class = "nav-item"><a href="home.html" class = "nav-link">Inicio</a></li>
                            <li class = "nav-item"><a href="professor.html" class = "nav-link">Asesores</a></li>
                            <li class = "nav-item"><a href="#" class = "nav-link active">Alumnos</a></li>
                            <li class = "nav-item"><a href="#" class = "nav-link">Salir</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
         <?php include('../modulos/listar_alumnos.php'); ?>
        
        <script src="../js/jquery-3.4.1.min.js"></script>
        <script src="../js/popper.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
    </body>
</html>
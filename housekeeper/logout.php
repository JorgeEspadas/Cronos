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
            if (isset( $_SESSION['session_id'] ) ) {
                session_destroy();
                ?>
                    <main class = "container d-flex justify-content-center align-items-center" id="accordion-main" >
                            <div class="row card  d-block" style="width: 18rem;">
                                <div class="card-body  text-center">
                                    <h4 class="card-text">Ha salido con exito</h4>
                                </div>
                            </div>
                    </main>
            <?php
            } else {
                // Redirect a la pagina de acceso :v
                ?>
                   <main class = "container d-flex justify-content-center align-items-center" id="accordion-main" >
                            <div class="row card  d-block" style="width: 18rem;">
                                <div class="card-body  text-center">
                                    <h4 class="card-text">No existe ninguna sesion activa.</h4>
                                </div>
                            </div>
                    </main> 
                <?php
            }
            header("Refresh:5; url=../housekeeper/acceso.php");
        ?>
    </body>
</html>
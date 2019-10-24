<!DOCTYPE html>
<html lang = "es">
    <head>
        <title>Registro</title>
        <link rel = "stylesheet" href = "./css/style-register.css">
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta charset = "utf-8">
        <link rel="shortcut icon" href="image/logo-apolo.jpg">
    </head>
    <body>
        <header class = "container-fluid">
            <div class = "row d-flex justify-content-between">
                <img id = "uac" class = "" src = "image/uac-logo.png" alt = "UAC" width="95" height="95">
                <img id = "fdi" src = "image/fi.png" alt = "FDI" width="95" height="95">
            </div>
        </header>
        
        <main class = "container d-flex justify-content-center align-items-center" id="accordion-main" >
            <div class="row card  d-block" style="width: 18rem;">
                <div class= " d-flex justify-content-end m-3">
                    <button type="button" class="btn btn-link" data-toggle= "collapse" data-target= "#config" aria-expanded="false" aria-control="collapseOne"><img class="img-fluid" src="image/configuraciones.png" width="30"></button>
                </div>
                <img class="card-img-top img-fluid" src="image/lector-prueba.gif" alt="Escaner">
                <div class="card-body  text-center">
                    <h4 class="card-text">Escanea tu credencial en la camara.</h4>
              </div>
            </div>
        </main>
        <section class="container-fluid">
            <div  class="row m-0 mt-4 p-2 m-sm-5 collapse" data-parent="#accordion-main" id="config">
                <div class="col-12">
                    Hola perro
                </div>
            </div>
        </section>
        
        
        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
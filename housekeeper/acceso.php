<!DOCTYPE  html>
<html lang = "es">
    <head>
        <title>Administracion</title>
        <link rel = "stylesheet" href = "../css/estilos.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="../fonts/ionicons.min.css">
        <meta charset = "utf-8">
        <link rel="shortcut icon" href="../image/logo-apolo.jpg">
    </head>
    <body>
        <div class="" id="content"></div>
        <br>
        <div class="login-dark">
        <form method="post" action="login.php" id='form-acceso'>
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
            <div class="form-group"><input class="form-control" type="text" name="id_empleado" id="id_empleado" placeholder="ID. De Empleado" required autofocus></div>
            <div class="form-group"><input class="form-control" type="password" name="password" id="password" placeholder="Password" required></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Ingresar</button></div>
            <!--<a class="forgot" href="#">Forgot your email or password?</a>-->
            </form>
        </div>
        <script src="../js/jquery-3.4.1.min.js"></script>
        <script src="../js/popper.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                var frm = $('#form-acceso');
                var url = frm.attr("action");
                        frm.submit(function (e) {
                            e.preventDefault();

                            $.ajax({
                                type: 'POST',
                                url: url,
                                data: frm.serialize(),
                                success: function (data) {

                                    if(data.includes("alert-success")){
                                        $('#content').empty().show().html(data).delay(2000).fadeOut(500);
                                        setTimeout("location.href='../housekeeper/home.php'", 3000);
                                    }else{
                                        $('#content').empty().show().html(data).delay(2000).fadeOut(500);
                                    }
                                }
                            });
                        });
            });
        </script>
    </body>
</html>
<?php include ('../modulos/header.php')?>   

        <?php
            if(isset($_POST['id_empleado'])){
                include("../modulos/modificar_docente.php");
            }
        ?>     
<?php include ('../modulos/footer.php')?>
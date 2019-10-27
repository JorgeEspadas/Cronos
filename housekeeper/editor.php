<?php include ('../modulos/header.php')?>    
        <?php
            if(isset($_POST['matricula_alumno'])){
                include("../modulos/modificar.php");
            }
        ?>     
<?php include ('../modulos/footer.php')?>
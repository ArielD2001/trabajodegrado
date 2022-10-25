<?php 
include('../assets/loader.html');
include_once('databases/connectToBD.php');
include('config/validatesesion.php') ; 
$cuimactive =true;
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <?php include "config/config-header.php" ?>
     <title>Cuidado materno infantil</title>
</head>

<body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
    <div class="wrapper">

        <!-- ========== sidebar =========-->
        <?php include "templates/plantilla-sidebar.php"; ?>
        <!-- ========= end sidebar ========= -->



        <div class="content-page">

            <!-- ========= header ========= -->
            <?php include "templates/plantilla-header.php"; ?>
            <!-- ========= end header ========= -->



            
            <!-- ========= contenido ========= -->
            <div class="content container">
                <div class="contenedor">
                <div class="row   px-3 my-3">
                        <div class="col-6  ">
                            <h3>Cuidado Materno Infantil</h3>
                        </div>
                        <div class="col-6 justify-content-end  d-flex align-items-center">
                            <span class="h6"><?php echo date('d/m/y') . ' - ' ?>
                                <div class="hora_hoy" style="display: inline;">00:00:00</div>
                            </span>
                        </div>
                    </div>
                    <script>
                        setInterval(function() {
                            var hoy = new Date();
                            var hora_h = hoy.getHours() < 10 ? '0' + hoy.getHours() : hoy.getHours();
                            var hora_m = hoy.getMinutes() < 10 ? '0' + hoy.getMinutes() : hoy.getMinutes();
                            var hora_s = hoy.getSeconds() < 10 ? '0' + hoy.getSeconds() : hoy.getSeconds();
                            var hora = hora_h + ":" + hora_m + ":" + hora_s;
                            document.querySelector(".hora_hoy").innerHTML = hora;
                        }, 1000);
                    </script>
                </div>
            </div>
            <!-- ========= end contenido ========= -->


        </div>

        <!-- ========= aside ========= -->
          <?php include "templates/plantilla-aside.php" ;?>
        <!-- ========= end aside ========= -->

        <!-- ========= footer =========-->
          <?php include "templates/plantilla-footer.php" ;?>
        <!-- ========= end footer ========= -->
    </div>
    <?php include "config/config-footer.php" ?>
</body>
</html>
<?php 
include('../assets/loader.html');
include_once('databases/connectToBD.php');
include('config/validatesesion.php') ;
$ivactive =true;
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <?php include "config/config-header.php" ?>
     <title>Fundamentos socioeducativo IV</title>
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
                            <h3>Fundamentos Socioeducativos IV</h3>
                        </div>
                        <div class="col-6 justify-content-end  d-flex align-items-center">
                            <span class="h6"><?php echo date('d/m/y') . ' - ' ?>
                                <div class="hora_hoy" style="display: inline;">00:00:00</div>
                            </span>
                        </div>
                    </div>

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
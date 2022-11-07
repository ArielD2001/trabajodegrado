<?php

//Loader
include('../assets/loader.html');

//Conexion a base de datos
include_once('databases/connectToBD.php');

//Verificacion de Sesion
include('config/validatesesion.php');
$home = true;
?>


<!DOCTYPE html>
<html lang="es">

<head>

    <?php include('config/config-header.php') ?>
    <link rel="shortcut icon" href="../assets/images/logo_sm.png">
    <title>Home</title>
   
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

            <div class="card">
                <div class="card-body">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                               <a target="blank" href="https://www.curn.edu.co/inscripciones"> <img class="d-block img-fluid w-100" src="../assets/images/layouts/curn1.jpg" alt="First slide"></a>
                            </div>
                            <div class="carousel-item">
                                <a target="blank" href="https://www.curn.edu.co/jornadaactualizacioniq.html"><img class="d-block img-fluid -100" src="../assets/images/layouts/curn2.jpg" alt="Second slide"></a>
                            </div>
                            <div class="carousel-item">
                               <a target="blanl" href="https://curn.edu.co/buengobierno"> <img class="d-block img-fluid w-100" src="../assets/images/layouts/curn3.jpg" alt="Third slide"></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="content container">
                <div class="contenedor">
                    <div class="row   px-3 mt-3">
                        <div class="col-6  ">
                            <h4>Bienvenido <?php echo  ucwords(strtolower($nombre)). ' '. ucwords(strtolower($apellido)) ?></h4>
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

            <!-- ========= footer =========-->
            <?php include "templates/plantilla-footer.php"; ?>
            <!-- ========= end footer ========= -->

        </div>

        <!-- ========= aside ========= -->
        <?php include "templates/plantilla-aside.php"; ?>
        <!-- ========= end aside ========= -->

    </div>


    <?php include('config/config-footer.php'); ?>
</body>

</html>
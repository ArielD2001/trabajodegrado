<?php
include_once('databases/connectToBD.php');
include('config/validatesesion.php');

include('../assets/loader.html');
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
                               <a href="https://www.curn.edu.co/inscripciones"> <img class="d-block img-fluid" src="../assets/images/layouts/curn1.jpg" alt="First slide"></a>
                            </div>
                            <div class="carousel-item">
                                <a href="https://www.curn.edu.co/jornadaactualizacioniq.html"><img class="d-block img-fluid" src="../assets/images/layouts/curn2.jpg" alt="Second slide"></a>
                            </div>
                            <div class="carousel-item">
                               <a href="https://unicurn.sharepoint.com/sites/public/Documentos/Forms/AllItems.aspx?id=%2Fsites%2Fpublic%2FDocumentos%2Fpublic%2Fweb%2Fotros%2FCONVOCATORIA%20REVISTA%20VIRTUAL%20PORTAL%20DE%20LAS%20PALABRAS%208%2Epdf&parent=%2Fsites%2Fpublic%2FDocumentos%2Fpublic%2Fweb%2Fotros&p=true&ga=1"> <img class="d-block img-fluid" src="../assets/images/layouts/curn3.jpg" alt="Third slide"></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="content container">
                <div class="contenedor">
                    <div class="row   px-3 mt-3">
                        <div class="col-6  ">
                            <h3>Home</h3>
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
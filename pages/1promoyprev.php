<?php include('../assets/loader.html'); ?>

<?php
include('databases/connectToBD.php');
include('config/validatesesion.php');

$pypactive=true;
$consulta = "SELECT * from usuarios WHERE id = ?";
$sentencia = $mbd->prepare($consulta);
$sentencia->bindParam(1, $id);
$sentencia->execute();
$filas = $sentencia->rowCount();
echo $filas;

if ($filas > 0) {
    $resultado = $sentencia->fetch();
    $nombre  = $resultado['nombre'];
    $apellido  = $resultado['apellido'];
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <?php include "config/config-header.php" ?>
    <title>Promocion y prevencion</title>
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
            <div class="content">
                <div class="contenedor">
                    <h3>Promocion y prevencion</h3>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ========= end contenido ========= -->


        </div>

        <!-- ========= aside ========= -->
        <?php include "templates/plantilla-aside.php"; ?>
        <!-- ========= end aside ========= -->

        <!-- ========= footer =========-->
        <?php include "templates/plantilla-footer.php"; ?>
        <!-- ========= end footer ========= -->
    </div>
    <?php include "config/config-footer.php" ?>
</body>

</html>
<?php include('../assets/loader.html'); ?>

<?php
include('databases/connectToBD.php');
include('config/validatesesion.php');

$permisosactive = true;
$consulta = "SELECT * from usuarios WHERE id = ?";
$sentencia = $mbd->prepare($consulta);
$sentencia->bindParam(1, $id);
$sentencia->execute();
$filas = $sentencia->rowCount();
//echo $filas;

if ($filas > 0) {
    $resultado = $sentencia->fetch();
    $nombre  = $resultado['nombre'];
    $apellido  = $resultado['apellido'];
}


$consulta2 = "SELECT * from modulos";
$sentencia2 = $mbd->prepare($consulta2);
$sentencia2->execute();
$filas2 = $sentencia2->rowCount();
$modulos = $sentencia2->fetchAll();


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <?php include "config/config-header.php" ?>
    <title>Permisos</title>
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
                            <h3>Permisos</h3>
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
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <?php
                                    if ($filas2 < 1) {
                                    ?>
                                        <div class="row">
                                            <div class="col-12">
                                                <a href="listas/new" class="btn btn/success" style="background-color: #6b5eae; color:white">Agregar nueva lista</a>
                                            </div>
                                            <div class="col-12 d-flex flex-column align-items-center">
                                                <img src="../assets/images/layouts/not-found.jpg" width="300px" alt="No hay ningun registro!">
                                                <span class="h4">No se encontraron Listas</span>
                                            </div>
                                        </div>
                                    <?php
                                    } else {
                                    ?>
                                        <table class="table table-centered mb-0">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th>id</th>
                                                    <th>Modulo</th>
                                                    <th class="text-center">Permisos</th>
                                                    <th class="text-end">Ultima modificacion</th>
                                                    <th class="w-25"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                foreach ($modulos as $modulo) {
                                                ?>
                                                    <tr>
                                                        <td><?php echo $modulo['id'] ?></td>
                                                        <td><?php echo $modulo['nombre'] ?></td>
                                                        <td class=" text-center"> 0</td>
                                                        <td class=" text-end"> 00/00/00</td>
                                                        <td class="  text-center h3"><span style="cursor:pointer">...</span></td>
                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========= footer =========-->
                    <!-- ========= end footer ========= -->
                </div>
            </div>
            <!-- ========= end contenido ========= -->
            <?php include "templates/plantilla-footer.php"; ?>


        </div>

        <!-- ========= aside ========= -->
        <?php include "templates/plantilla-aside.php"; ?>
        <!-- ========= end aside ========= -->

    </div>
    <?php include "config/config-footer.php" ?>
</body>

</html>
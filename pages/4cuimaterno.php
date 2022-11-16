<?php 

//Loader
include('../assets/loader.html');

//Conexion a base de datos
include_once('databases/connectToBD.php');

//Verificacion de Sesion
include('config/validatesesion.php'); 

$idmodulo=4;
include('config/listas-modulo.php');

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
                            <h3>Promoción y prevención</h3>
                        </div>
                        <div class="col-6 justify-content-end  d-flex align-items-center">
                            <span class="h6"><?php echo date('d/m/y') . ' - ' ?>
                                <div class="hora_hoy" style="display: inline;">00:00:00</div>
                            </span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                <?php if ($filas2 != 0) { ?>
                                        <div id="tabla-list" class=" flex-wrap d-flex justify-content-center align-items-center mt-3">
                                            <table class="table table-sm table-centered mb-5">
                                                <thead class="text-center bg-dark text-white">
                                                    <tr>
                                                        <th>Lista</th>
                                                        <th> Modulo</th>
                                                        <th>Semestre</th>
                                                        <th> Estudiantes</th>
                                                        <th>Fecha de añadido</th>
                                                        <th>Opciones</th>
                                                    </tr>
                                                </thead>

                                                <tbody class="text-center border">
                                                    <?php
                                                    foreach ($listas as $dato) {
                                                    ?>
                                                        <tr>
                                                            <td class="fw-bold fs-5">
                                                                <a href="listas?lista=<?php echo base64_encode(base64_encode($dato['id'])); ?>" class="text-info"><?php echo ucwords(strtolower($dato['nombre'])); ?></a>
                                                            </td>

                                                            <td>
                                                                <?php
                                                                $modulo = 'SELECT * from modulos WHERE id = ? ';
                                                                $nmodulo = $mbd->prepare($modulo);
                                                                $nmodulo->bindParam(1, $dato['id_modulo']);
                                                                $nmodulo->execute();
                                                                $nombre = $nmodulo->fetch();
                                                                echo $nombre['nombre'];
                                                                // var_dump($resultadocantidad);
                                                                ?>
                                                            </td>

                                                            <td>
                                                                <?php echo $dato['semestre']; ?>
                                                            </td>

                                                            <td>
                                                                <?php
                                                                $cantidad = 'SELECT * from estudiantes WHERE id_lista = ? ';
                                                                $sentenciacantidad = $mbd->prepare($cantidad);
                                                                $sentenciacantidad->bindParam(1, $dato['id']);
                                                                $sentenciacantidad->execute();
                                                                $filascantidad = $sentenciacantidad->rowCount();
                                                                echo $filascantidad;
                                                                ?>
                                                            </td>

                                                            <td>
                                                                <?php echo $dato['fecha']; ?>
                                                            </td>
                                                            <td>
                                                                <a href="list=<?php echo base64_encode($dato['id']) ?>" id="button-delete-list" class="text-danger btn border eliminar-btn"><i class="mdi mdi-delete"></i></a>
                                                            </td>

                                                        </tr>



                                                    <?php
                                                    } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    <?php } else { ?>
                                        <div class="w-100 text-center">
                                            <img src="../assets/images/layouts/not-found.png" width="200" alt="">
                                            <h4>No hay listas en este modulo</h4>
                                            <p>Agregue una nueva en la pagina de Listas</p>

                                            <a href="listas" class="btn btn-success">Agregar</a>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            <!-- ========= end contenido ========= -->


            
                    <!-- ========= footer =========-->
                      <?php include "templates/plantilla-footer.php" ;?>
                    <!-- ========= end footer ========= -->
        </div>

        <!-- ========= aside ========= -->
          <?php include "templates/plantilla-aside.php" ;?>
        <!-- ========= end aside ========= -->
    </div>
    <?php include "config/config-footer.php" ?>
</body>
</html>
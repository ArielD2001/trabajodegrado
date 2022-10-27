<?php
include('databases/connectToBD.php');
include('config/validatesesion.php');

$listactive = true;
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


$consulta2 = "SELECT * from listas ORDER BY id DESC ";
$sentencia2 = $mbd->prepare($consulta2);
$sentencia2->execute();
$filas2 = $sentencia2->rowCount();

if (isset($_GET['lista'])) {
    $consultal = "SELECT * from listas WHERE id = ? ";
    $sentencial = $mbd->prepare($consultal);
    $sentencial->bindParam(1,$_GET['lista']);
    $sentencial->execute();
    $datal = $sentencial->fetch();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <?php include "config/config-header.php" ?>
    <title>Listas</title>
</head>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

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
                <div class="contenedor ">






                    <div class="row   px-3 my-3">
                        <div class="col-6  ">
                            <?php
                            if (!isset($_GET['lista'])) {
                            ?>
                                <h3>Listas</h3>
                            <?php
                            } else {
                            ?>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item text-primary"><a href="listas">Listas</a></li>
                                        <li class="breadcrumb-item active" aria-current="page"> <?php echo $datal['nombre'] ?></li>
                                    </ol>
                                </nav>
                            <?php
                            }
                            ?>

                        </div>
                        <div class="col-6 justify-content-end  d-flex align-items-center">
                            <span class="h6"><?php echo date('d/m/y') . ' - ' ?>
                                <div class="hora_hoy" style="display: inline;">00:00:00</div>
                            </span>
                        </div>
                    </div>
                    <div class="row">
                        <style>
                            .tasks {
                                width: 95% !important;
                                transition: .1s;
                            }

                            .tasks:hover {
                                box-shadow: 0 0 10px rgb(200, 200, 200);
                            }

                            .card {
                                transition: .1s;
                            }

                            .tasks:hover .card {
                                background-color: rgb(240, 240, 240);
                            }

                            .mdi.mdi-dots-vertical.font-18 {
                                transition: .1s;
                                padding: 5px;
                                border-radius: 50%;
                            }

                            .mdi.mdi-dots-vertical.font-18:hover {
                                background-color: rgb(210, 210, 210);
                            }
                        </style>

                        <div class="col-12" id="app">
                            <div class="card position-relative">
                                <?php include('../assets/loader2.html'); ?>

                                <div class="card-body">

                                    <?php
                                    if (isset($_GET['lista'])) {
                                    } else {
                                    ?>
                                        <div class="row ">
                                            <div class="col-12 text-end">
                                                <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#centermodal"> + Agregar nueva lista</button>
                                                <div class="modal fade" id="centermodal" tabindex="-1" role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg text-start">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="myCenterModalLabel"> Agregar nueva lista</h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                                                            </div>
                                                            <div class="modal-body ">

                                                                <div class="container">
                                                                    <div class="row border p-3 rounded">
                                                                        <form method="post" id="formulario-list" data-plugin="dropzone" data-previews-container="#file-previews" data-upload-preview-template="#uploadPreviewTemplate" accept=".xlsx">
                                                                            <div class="row ">
                                                                                <div class="col-12">
                                                                                    <label class="form-label" for="nombre">Nombre:</label>
                                                                                    <input type="text" class="form-control" id="nombre" placeholder="Nombre de lista" name="nombre-list" />
                                                                                </div>
                                                                                <div class="col-12 mt-2">
                                                                                    <label class="form-label" for="lista">Lista</label>
                                                                                    <input type="file" class="form-control" id="lista" placeholder="Nombre de lista" name="nombre-list" />
                                                                                </div>
                                                                                <div class="col-6 mt-2">
                                                                                    <label class="form-label" for="semestre">Semestre</label>
                                                                                    <input type="text" class="form-control" id="semestre" placeholder="Semestre" name="semestre-list" />
                                                                                </div>

                                                                                <div class="col-6 pt-1">
                                                                                    <button type="button" name="agregar-list" class="w-100 col-6 btn btn-success mt-4" id="agregar-list">Agregar Lista</button>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-6 mt-1" id="resultado-list">

                                                                            </div>
                                                                        </form>

                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->
                                        </div>
                                        <?php
                                        if ($filas2 < 1) {
                                        ?>

                                            <div class="col-12 d-flex flex-column align-items-center">
                                                <img src="../assets/images/layouts/not-found.png" draggable="false" width="300px" alt="No hay ningun registro!" style="opacity: .8;">
                                                <span class="h4">No se encontraron Listas</span>
                                            </div>
                                        <?php
                                        } else {
                                            $datos = $sentencia2->fetchAll();
                                        ?>
                                            <div class=" flex-wrap d-flex justify-content-center align-items-center mt-3">
                                                <?php
                                                foreach ($datos as $dato) {
                                                ?>
                                                    <div class="tasks border p-1 ">

                                                        <div id="task-list-two" class="task-list-items">

                                                            <!-- Task Item -->
                                                            <div class="card mb-0">
                                                                <div class="card-body p-2 ">
                                                                    <small class="float-end text-muted"><?php echo $dato['fecha']; ?></small>

                                                                    <h5 class="mt-2 mb-2">
                                                                        <a href="listas?lista=<?php echo $dato['id']; ?>" class="text-primary"><?php echo ucwords(strtolower($dato['nombre'])); ?></a>
                                                                    </h5>

                                                                    <p class="mb-0">
                                                                        <span class="pe-2 text-nowrap mb-2 d-inline-block">
                                                                            <i class="mdi mdi-briefcase-outline text-muted"></i>
                                                                            Hyper
                                                                        </span>
                                                                        <span class="text-nowrap mb-2 d-inline-block">
                                                                            <i class="uil uil-user"></i>
                                                                            <b>
                                                                                <?php
                                                                                $cantidad = 'SELECT * from estudiantes WHERE id_lista = ? ';
                                                                                $sentenciacantidad = $mbd->prepare($cantidad);
                                                                                $sentenciacantidad->bindParam(1, $dato['id']);
                                                                                $sentenciacantidad->execute();
                                                                                $filascantidad = $sentenciacantidad->rowCount();
                                                                                echo $filascantidad;
                                                                                // var_dump($resultadocantidad);
                                                                                ?>
                                                                            </b> Estudiantes
                                                                        </span>
                                                                    </p>

                                                                    <div class="dropdown float-end">
                                                                        <a href="#" class="dropdown-toggle text-muted arrow-none" data-bs-toggle="dropdown" aria-expanded="false">
                                                                            <i class="mdi mdi-dots-vertical font-18"></i>
                                                                        </a>
                                                                        <div class="dropdown-menu dropdown-menu-end bg-dark">
                                                                            <!-- item-->
                                                                            <a href="javascript:void(0);" class="dropdown-item text-success"><i class="mdi mdi-pencil me-1"></i>Calificar</a>
                                                                            <!-- item-->
                                                                            <a href="javascript:void(0);" class="dropdown-item text-info"><i class="mdi mdi-pencil me-1"></i>Editar</a>
                                                                            <!-- item-->
                                                                            <a href="javascript:void(0);" class="dropdown-item text-danger"><i class="mdi mdi-delete me-1"></i>Borrar</a>

                                                                        </div>
                                                                    </div>

                                                                    <p class="mb-0">
                                                                        <span class="align-middle">Semestre: <?php echo $dato['semestre']; ?></span>
                                                                    </p>
                                                                </div> <!-- end card-body -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php
                                                } ?>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                </div>
                            <?php
                                    }
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include "templates/plantilla-footer.php"; ?>
    </div>
    <!-- ========= end contenido ========= -->


    </div>

    <!-- ========= aside ========= -->
    <?php include "templates/plantilla-aside.php"; ?>
    <!-- ========= end aside ========= -->

    <!-- ========= footer =========-->
    <!-- ========= end footer ========= -->
    </div>
    <?php include "config/config-footer.php" ?>
    <script src="../assets/js/main.js">
    </script>
</body>

</html>
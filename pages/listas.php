<?php
include('databases/connectToBD.php');
include('config/validatesesion.php');

$listactive =true;
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
    $idlistae =base64_decode(base64_decode($_GET['lista']));
    $sentencial->bindParam(1, $idlistae);
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
<style>
    body>div.wrapper>div.content-page>div.navbar-custom>ul>li:nth-child(1)>a>i::before {
        margin-top: -45px !important;
    }
</style>

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
                                        <li class="breadcrumb-item text-primary"><a href="javascript:history.go(-1)">Listas</a></li>
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

                        <div class="col-12" id="app">
                            <div class="card ">

                                <div class="card-body ">
                                    <?php
                                    if (isset($_GET['lista'])) {
                                        include('config/estudiantes-list.php');
                                    } else {
                                    ?>
                                        <div class="row ">
                                            <div class="col-12 text-end">
                                                <div class="d-flex justify-content-between align-items-center container">
                                                    <div class="app-search dropdown d-none d-lg-block">
                                                        <form>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control dropdown-toggle" placeholder="Buscar lista..." id="top-search">
                                                                <span class="mdi mdi-magnify search-icon"></span>
                                                                <button class="input-group-text btn-info" type="submit">Buscar</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#centermodal"> + Agregar nueva lista</button>
                                                </div>
                                                <div class="modal fade" id="centermodal" tabindex="-1" role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered text-start">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="myCenterModalLabel"> Agregar nueva lista</h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                                                            </div>
                                                            <div class="modal-body ">

                                                                <div class="container">
                                                                    <div class="row border p-3 rounded">
                                                                        <form method="post" accept=".xls,.xlsx" id="formulario-list" enctype="multipart/form-data" data-plugin="dropzone" data-previews-container="#file-previews" data-upload-preview-template="#uploadPreviewTemplate" accept=".xlsx">
                                                                            <div class="row ">
                                                                                <div class="col-12">
                                                                                    <label class="form-label" for="nombre">Nombre:</label>
                                                                                    <input type="text" class="form-control" id="nombre-list" placeholder="Nombre de lista" name="nombre-list" />
                                                                                </div>

                                                                                <div class="col-12 mt-2">
                                                                                    <label class="form-label" for="semestre">Semestre:</label>
                                                                                    <select name="semestre" class="form-select" id="semestre-list">
                                                                                        <option selected value="">Seleccionar semestre</option>
                                                                                        <option value="I (Primer)"> I (Primero) </option>
                                                                                        <option value="II (Segundo)"> II (Segundo) </option>
                                                                                        <option value="III (Tercero)"> III (Tercero) </option>
                                                                                        <option value="IV (Cuarto)"> IV (Cuarto) </option>
                                                                                        <option value="V (Quinto)"> V (Quinto) </option>
                                                                                        <option value="VI (Sexto)"> VI (Sexto) </option>
                                                                                        <option value="VII (Septimo)"> VII (Septimo) </option>
                                                                                        <option value="VIII (Octavo)">VIII (Octavo) </option>
                                                                                        <option value="IX (Noveno)"> IX (Noveno) </option>
                                                                                        <option value="X (Decimo)"> X (Decimo) </option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-12 mt-2">
                                                                                    <label class="form-label" for="adjunto">Lista</label>
                                                                                    <input type="file" class="form-control" id="adjunto" name="adjunto" />
                                                                                </div>
                                                                                <div class="col-6 pt-1">
                                                                                    <button type="button" name="agregar-list" class="w-100 col-6 btn btn-success mt-4" id="agregar-list">Subir Lista</button>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-12 mt-1" id="resultado-list">

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
                                            <div id="tabla-list" class=" flex-wrap d-flex justify-content-center align-items-center mt-3">
                                                <?php
                                                foreach ($datos as $dato) {
                                                ?>
                                                    <div class="tasks border p-1 ">

                                                        <div id="task-list-two" class="task-list-items">

                                                            <!-- Task Item -->
                                                            <div class="card px-2 mb-0">
                                                                <div class="card-body p-1 px-2 ">
                                                                    <small class="float-end text-muted">Fecha:<?php echo $dato['fecha']; ?></small>

                                                                    <h5 class="mt-1 mb-1">
                                                                        <a href="listas?lista=<?php echo base64_encode( base64_encode($dato['id'])); ?>" class="text-info"><?php echo ucwords(strtolower($dato['nombre'])); ?></a>
                                                                    </h5>

                                                                    <div class="d-flex justify-content-between">
                                                                        <p class="mb-0">
                                                                            <span class="pe-2 text-nowrap mb-1 d-inline-block">
                                                                                <i class="mdi mdi-briefcase-outline text-muted"></i>
                                                                                Hyper
                                                                            </span>
                                                                            <span class="text-nowrap mb-1 d-inline-block">
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
                                                                            <span class="align-middle"> - <?php echo $dato['semestre']; ?> Semestre </span>

                                                                        </p>

                                                                        <div class="end d-flex align-items-center ">
                                                                            <a href="list=<?php echo base64_encode($dato['id']) ?>" id="button-delete-list" class="text-danger btn border eliminar-btn"><i class="mdi mdi-delete"></i></a>

                                                                            <div class="dropdown ">
                                                                                <a href="#" class="dropdown-toggle text-muted arrow-none" data-bs-toggle="dropdown" aria-expanded="false" style=" margin-left:10px !important;  padding:7px 5px ; border: 1px solid lightgrey">
                                                                                    <i class="mdi mdi-dots-vertical font-18"></i>
                                                                                </a>
                                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                                    <!-- item-->
                                                                                    <a href="javascript:void(0);" class="dropdown-item text-center text-success"><i class="mdi mdi-pencil me-1"></i>Calificar</a>
                                                                                    <!-- item-->
                                                                                    <a href="javascript:void(0);" class="dropdown-item text-center text-info"><i class="mdi mdi-pencil me-1"></i>Editar</a>
                                                                                    <!-- item-->


                                                                                </div>
                                                                            </div>
                                                                        </div>


                                                                    </div> <!-- end card-body -->
                                                                </div>
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


</body>
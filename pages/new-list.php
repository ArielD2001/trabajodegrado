<?php include('../assets/loader.html'); ?>

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




?>

<!DOCTYPE html>
<html lang="es">

<head>
    <?php include "config/config-header.php" ?>
    <title>Listas</title>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

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
                <div class="contenedor container">
                    <div class="row   px-3 my-3">
                        <div class="col-6  ">
                            <nav aria-label="breadcrumb" class="text-primary">
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="listas">Listas</a></li>
                                    <li class="breadcrumb-item " style="color:grey">Nueva lista</li>
                                </ol>
                            </nav>
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
                            <div class="card shadow shadow-large">
                                <div class="card-body">

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="container px-5">
                                                <form method="post" id="formulario-list" data-plugin="dropzone" data-previews-container="#file-previews" data-upload-preview-template="#uploadPreviewTemplate" accept=".xlsx">
                                                    <div class="row mb-2">
                                                        <div class="col-6">
                                                            <label class="form-label" for="nombre">Nombre:</label>
                                                            <input type="text" class="form-control" id="nombre" placeholder="Nombre de lista" name="nombre-list" />
                                                        </div>
                                                        <div class="col-6">
                                                            <label class="form-label" for="semestre">Semestre</label>
                                                            <input type="text" class="form-control" id="semestre" placeholder="Semestre" name="semestre-list" />
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-12 mt-2" id="resultado-list">

                                                    </div>
                                                    <div class="d-flex justify-content-center">
                                                        <button type="button" name="agregar-list" class="w-100 btn-large mt-2 btn btn-success " id="agregar-list">Agregar Lista</button>
                                                    </div>
                                                </form>
                                            </div>

                                            <!-- Preview -->
                                            <div class="dropzone-previews mt-3" id="file-previews"></div>

                                            <!-- file preview template -->
                                            <div class="d-none" id="uploadPreviewTemplate">
                                                <div class="card mt-1 mb-0 shadow-none border">
                                                    <div class="p-2">
                                                        <div class="row align-items-center">
                                                            <div class="col-auto">
                                                                <img data-dz-thumbnail src="#" class="avatar-sm rounded bg-light" alt="">
                                                            </div>
                                                            <div class="col ps-0">
                                                                <a href="javascript:void(0);" class="text-muted fw-bold" data-dz-name></a>
                                                                <p class="mb-0" data-dz-size></p>
                                                            </div>
                                                            <div class="col-auto">
                                                                <!-- Button -->
                                                                <a href="" class="btn btn-link btn-lg text-muted" data-dz-remove>
                                                                    <i class="dripicons-cross"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

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
<!-- plugin js -->
<script src="../assets/js/vendor/dropzone.min.js"></script>
<!-- init js -->
<script src="../assets/js/ui/component.fileupload.js"></script>
<script>
    $('#agregar-list').click(function() {
        $.ajax({
            url: 'config/add-list.php',
            type: 'post',
            data: $('#formulario-list').serialize(),
            success: function(resultado) {
                $('#resultado-list').html('<small >Cargando...</small>');
                setTimeout(() => {
                    $('#resultado-list').html(resultado);
                }, 1000);
            }
        })
    })
</script>

</html>
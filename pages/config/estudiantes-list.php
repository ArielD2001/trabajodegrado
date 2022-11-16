<?php

//se realiza la consulta para obtener los estudiantes de la lista
$estudiantes_sql = 'SELECT * FROM estudiantes WHERE id_lista = ? ORDER BY nombre ASC';
$sentenciae = $mbd->prepare($estudiantes_sql);

//se descifra el id de la lista 
$ide = base64_decode(base64_decode($_GET['lista']));
$sentenciae->bindParam(1, $ide);
$sentenciae->execute();
$datae = $sentenciae->fetchAll();
$cantidad = $sentenciae->rowCount();;
$cont = 1;
if ($modulo['nombre'] == 'Promoción y prevención') {
    $pypactive = true;
}
?>

<!-- interfaz de la tabla de estudiante -->
<div class="row pt-3 px-3" id="estudiantes-table">
    <div class="col-12 d-flex justify-content-between align-items-center">
        <!--Nombre de la lista -->
        <b class="header-title fs-3 col-4 text-primary"><?php echo $datal['nombre'] ?></b>



        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#centermodal"> + Agregar Estudiante</button>

        <div class="modal fade" id="centermodal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered text-start">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myCenterModalLabel"> + Agregar estudiante</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                    </div>
                    <div class="modal-body ">

                        <div class="container">
                            <div class="row border p-3 rounded">
                                <form method="post" accept=".xls,.xlsx" id="formulario-estudiante" enctype="multipart/form-data" data-plugin="dropzone" data-previews-container="#file-previews" data-upload-preview-template="#uploadPreviewTemplate" accept=".xlsx">
                                    <div class="row ">
                                        <input type="hidden" name="id_lista" value="<?php echo $datal['id'] ?>" />
                                        <div class="col-12">
                                            <label class="form-label" for="nombre-estudiante">Nombre:</label>
                                            <input type="text" class="form-control campo" id="nombre-estudiante" placeholder="Nombre" name="nombre-estudiante" />
                                        </div>
                                        <div class="col-12 mt-3">
                                            <label class="form-label" for="documento">documento:</label>
                                            <input type="text" class="form-control campo" id="documento-estudiante" placeholder="Documento" name="documento-estudiante" />
                                        </div>

                                        <div class="col-6 pt-1">
                                            <button type="button" name="agregar-estudiante" class="w-100 col-6 btn btn-success mt-4" id="agregar-estudiante">Agregar</button>
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
    </div>

    <div class="col-12">
        <hr>
        <div class="content">
            <?Php if ($cantidad != 0) { ?>


                <table class="table table-sm table-centered mb-5">
                    <thead class="text-center bg-secondary text-white">
                        <tr>
                            <th>Nombre</th>
                            <th>Documento</th>
                            <th>Calificaion</th>
                            <th>Fecha de añadido</th>
                            <th>opciones</th>
                        </tr>
                    </thead>
                    <tbody class=" border">
                        <?php foreach ($datae as $dato) : ?>
                            <tr>
                                <td class="fw-bold fs-5 px-2 text-left">
                                    <?php echo $dato['Nombre'] . ' ' . $dato['Nombre'] ?>
                                </td>

                                <td class="text-center">
                                    <?php echo $dato['documento'] ?>

                                </td>
                                <td class="text-center tex-danger">
                                    <span class="badge badge-danger-lighten">Sin calificacion</span>

                                </td>

                                <td class="text-center">
                                    <?php echo $datal['fecha'] ?>

                                </td>

                                <td class="text-center">
                                    <a href="student=<?php echo base64_encode($dato['id']) ?>" id="button-delete-list" class="text-danger btn border eliminar-student"><i class="mdi mdi-delete"></i></a>
                                </td>

                            </tr>



                        <?php endforeach ?>
                    </tbody>
                </table>
            <?php } else { ?>
                <div class="w-100 text-center h4 mt-5">Esta lista NO contiene ningun estudiante</div>
            <?php } ?>
        </div>

    </div>
</div><!-- end col-->
<script src="../assets/js/estudiantes.js"></script>
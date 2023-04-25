<?php

//se realiza la consulta para obtener los estudiantes de la lista
$estudiantes_sql = 'SELECT * FROM estudiantes WHERE id_lista = ? ORDER BY nombre ASC';
$sentenciae = $mbd->prepare($estudiantes_sql);

//se descifra el id de la lista 
$ide = base64_decode(base64_decode($_GET['lista']));
$sentenciae->bindParam(1, $ide);
$sentenciae->execute();
$datae = $sentenciae->fetchAll();
$cantidad = $sentenciae->rowCount();
$cont = 1;

?>

<!-- interfaz de la tabla de estudiante -->
<div class="row pt-3 px-0 px-md-3" id="estudiantes-table">
    <div class="col-12 d-flex justify-content-between align-items-center">
        <!--Nombre de la lista -->
        <b class="header-title fs-3 col-4 text-secondary fw-bold"><?php echo $datal['nombre'] ?></b>



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


                <table class="table table-sm table-centered py-3" id="tablas">
                    <thead class="text-center bg-dark text-white" >
                        <tr>
                            <th><span class=" text-xs me-1">Nombre</span></th>
                            <th><span class=" text-xs me-1">Documento</span></th>
                            <th><span class=" text-xs me-1">calificacion</span></th>
                            <th class=" text-xs d-md-table-cell d-none "><span class=" text-xs me-1">Fecha</span></th>
                            <th><span class="me-1">Opciones</span></th>
                        </tr>
                    </thead>
                    <tbody class=" border">
                        <?php foreach ($datae as $dato) : ?>
                            <tr>
                                <td class="  py-1 fs-5 ps-0 ps-md-3 text-left">
                                    <?php echo $dato['Nombre']  ?>
                                </td>

                                <td class="  py-1 text-center">
                                    <?php echo $dato['documento'] ?>

                                </td>
                                <td class="  py-1 text-center tex-danger h5">
                                    
                                <?php
                                    $notac = "SELECT *  FROM   modulo_nota WHERE id_estudiante = ?";
                                    $nota = $mbd->prepare($notac);
                                    $nota->bindParam(1, $dato['id']);
                                    $nota->execute();
                                    $fnota = $nota->rowCount();
                                    $resnota = $nota->fetch();

                              
                                    if($fnota == 0){
                                        ?>
                                        <span class="  py-1 badge badge-danger-lighten">Sin calificacion</span>

                                        <?php
                                        
                                    }else{
                                        if($resnota['nota'] >= 3){
                                            ?>
                                            <span class="  py-1 badge badge-success-lighten"><?php echo number_format($resnota['nota'],3) ?></span>
                                             <?php 
                                            
                                        }else{
                                            ?>
                                            <span class=" py-1 badge badge-warning-lighten"><?php echo number_format($resnota['nota'],3) ?></span>

                                            <?php
                                        }
                                        
                                    }
                                    ?>  
                                    

                                </td>

                                <td class="  py-1 text-center d-md-table-cell d-none ">
                                    <?php echo $dato['fecha'] ?>

                                </td>

                                <td class="text-center options-buttons">
                                <a  href="student=<?php echo base64_encode($dato['id']) ?>" id="button-delete-list" class="text-danger btn border eliminar-student"><i class="mdi mdi-delete"></i></a>
                                <a title="calificar" href="./forms/<?php echo   ($datal['id_modulo'] == '1' ? 'promform'   :
                                                                                ($datal['id_modulo'] == '2' ? 'actform'    : 
                                                                                ($datal['id_modulo'] == '3' ? 'cuimedform' :
                                                                                ($datal['id_modulo'] == '4' ? 'cuimatform' : 
                                                                                ($datal['id_modulo'] == '5' ? 'pradmform'  :
                                                                                ($datal['id_modulo'] == '6' ? 'adultmform' :
                                                                                ($datal['id_modulo'] == '7' ? 'praintform' :
                                                                                ($datal['id_modulo'] == '8' ? 'fivform'    : 'fvform')))))))); ?>?list=<?php echo base64_encode($ide) ?>&student=<?php echo base64_encode($dato['id']) ?>"  class="text-info btn border "><i class="mdi mdi-file"></i></a>
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
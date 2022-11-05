<?php

$estudiantes_sql = 'SELECT * FROM estudiantes WHERE id_lista = ?';
$sentenciae = $mbd->prepare($estudiantes_sql);
$ide = base64_decode(base64_decode($_GET['lista']));
$sentenciae->bindParam(1, $ide);
$sentenciae->execute();
$datae = $sentenciae->fetchAll();
$cont = 1;
?>
<div class="row pt-4 px-3">
    <div class="col-12">


        <h4 class="header-title"><?php echo $datal['nombre'] ?></h4>


        <hr>
        <div class="tab-content">
            <div class="tab-pane show active" id="multi-item-preview">
                <div id="selection-datatable_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                    <div class="px-5">
                        <p class="text-muted font-14 px-5">
                        <div class="alert alert-info" role="alert" style="display: flex; align-items:center; height:100%">
                            <i class="dripicons-information me-2"></i>
                            <p>En este apartado solamente puede borrar o editar alguna informacion de los estudiantes para calificar por favor seleccione la lista <strong> <?php echo $datal['nombre'] ?> </strong> en el modulo correspondiente a calificar.</p>
                        </div>
                        </p>
                    </div>
                </div>
            </div> <!-- end preview-->

        </div> <!-- end tab-content-->


    </div><!-- end col-->
</div>
<?php

//se realiza la consulta para obtener los estudiantes de la lista
$estudiantes_sql = 'SELECT * FROM estudiantes WHERE id_lista = ? ORDER BY nombre ASC';
$sentenciae = $mbd->prepare($estudiantes_sql);

//se descifra el id de la lista 
$ide = base64_decode(base64_decode($_GET['lista']));
$sentenciae->bindParam(1, $ide);
$sentenciae->execute();
$datae = $sentenciae->fetchAll();
$cont = 1;

$sqlList = 'SELECT * FROM listas WHERE id = ?';
$sentenciaList = $mbd->prepare($sqlListt);

?>

<!-- interfaz de la tabla de estudiante -->
<div class="row pt-4 px-3">
    <div class="col-12">

        <!--Nombre de la lista -->
        <h4 class="header-title"><?php echo $datal['nombre'] ?></h4>


        <hr>
        <div class="content">
            <table>
                <thead>
                    <tr>
                        <th>Nombre:</th>
                        <th>Documento</th>
                        <th>Nombre:</th>
                        <th>Nombre:</th>
                        <th>Nombre:</th>
                    </tr>
                </thead>
            </table>
        </div>


    </div><!-- end col-->
</div>

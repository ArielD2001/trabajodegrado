<?php

if (isset($_POST['agregar-list'])) {
    if (strlen($_POST['nombre-list']) == 0  || strlen($_POST['semestre-list']) == 0) {
        echo '<style> .loader{display:none !important}</style> ';
        echo '<div class="text-danger h6 mb-2">Por favor complete todos los campos </div>';
    } else {

        $_nombre = trim($_POST['nombre-list']);
        $_semestre = trim($_POST['semestre-list']);
        $_fecha = date('d/m/y');

        $consulta = "SELECT * from listas WHERE nombre = ?  AND semestre = ?";
        $sentencia = $mbd->prepare($consulta);
        $sentencia->bindParam(1, $_nombre);
        $sentencia->bindParam(2, $_semestre);
        $sentencia->execute();
        $fila = $sentencia->rowCount();

        if ($fila < 1) {

            $consultainsert = "INSERT INTO listas( nombre, semestre, fecha) VALUES(?,?,?)";
            $sentenciainsert = $mbd->prepare($consultainsert);
            $sentenciainsert->execute(array($_nombre, $_semestre, $_fecha));
            $filas = $sentenciainsert->rowCount();
            if ($filas > 0) {
                print "<script>window.setTimeout(function() { window.location = 'listas.php' }, 10);</script>";
            } else {
                echo '<div class="text-danger h6 mb-2">Error en la consulta</div>';
            }
        } else {
            echo '<div class="text-danger h6 mb-2">Ya esta lista existe</div>';
        }
    }
}

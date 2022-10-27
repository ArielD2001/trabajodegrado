<?php
include_once('../databases/connectToBD.php');
if (strlen($_POST['nombre-list']) == 0  || strlen($_POST['semestre-list']) == 0) {
    echo '<small class="text-danger">Por favor complete todos los cambio</small>';
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
            echo '<span class="text-success fs-30">¡Se creo la lista <strong>' . $_nombre . '!</strong> -  <a href="listas" class="text-info">Ver</a> </span>';
            print '<script>
                    document.querySelectorAll("input").forEach(elemento=>{elemento.value =""});
                </script>';
        } else {
            echo '<small class="text-danger">Erron en la consulta</small>';
        }
    } else {
        echo '<small class="text-danger">Ya esta lista existe</small>';
    }
}

<?php


require_once('../databases/connectToBD.php');


//Se validan que los campos NO esten vacios
if (strlen($_POST['nombre-estudiante']) == 0  || strlen($_POST['documento-estudiante']) == 0) {
    //mensaje de error
    echo 'campos vacios';
} else {
    //se toman las variables enviadas
    $idl = $_POST['id_lista'];
    $nombre = $_POST['nombre-estudiante'];
    $documento = $_POST['documento-estudiante'];

    //Se verifica que el estudiante a insertar ya no este registrada
    $consulta = "SELECT * from estudiantes WHERE Nombre = ?  AND documento = ?";
    $sentencia = $mbd->prepare($consulta);
    $sentencia->bindParam(1, $nombre);
    $sentencia->bindParam(2, $documento);
    $sentencia->execute();
    $fila = $sentencia->rowCount();

    //Se valida
    if ($fila < 1) {

        //Al validar que la lista no se encuentra registrada se registra
        $consultainsert = "INSERT INTO estudiantes( Nombre, documento, id_lista) VALUES(?,?,?)";
        $sentenciainsert = $mbd->prepare($consultainsert);
        $sentenciainsert->execute(array($nombre, $documento, $idl));
        $filas = $sentenciainsert->rowCount();

        //Se verifica que la fila se inserto

        echo 'ok';
    } else {

        // Mensaje de error
        echo 'error - existente';
    }
}


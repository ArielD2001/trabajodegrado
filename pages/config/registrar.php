<?php


require_once('../databases/connectToBD.php');


//Se validan que los campos NO esten vacios
if (strlen($_POST['nombre']) == 0  ||
strlen($_POST['apellido']) == 0  ||
strlen($_POST['documento']) == 0  ||
strlen($_POST['correo']) == 0  ||
strlen($_POST['contraseña']) == 0 ) {
    //mensaje de error
    echo 'campos vacios';
} else {
    //se toman las variables enviadas
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $documento = $_POST['documento'];
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];
    $fecha = date('d/m/Y');
    $tipo = 'REGISTRO';
    $avatar = 'null';

    //Se verifica que el estudiante a insertar ya no este registrada
    $consulta = "SELECT * from usuarios WHERE correo = ?";
    $sentencia = $mbd->prepare($consulta);
    $sentencia->bindParam(1, $correo);
    $sentencia->execute();
    $fila = $sentencia->rowCount();

    //Se valida
    if ($fila < 1) {

        //Al validar que la lista no se encuentra registrada se registra
        $consultainsert = "INSERT INTO usuarios( nombre,apellido, documento, correo, clave, ultima_sesion, fecha , tipo, avatar) VALUES(?,?,?,?,?,?,?,?,?)";
        $sentenciainsert = $mbd->prepare($consultainsert);
        $sentenciainsert->execute(array($nombre, $apellido, $documento,$correo,$contraseña,$fecha,$fecha,$tipo, $avatar));
        $filas = $sentenciainsert->rowCount();
        $id = $mbd->lastInsertId();
        //Se verifica que la fila se inserto
        session_start();
        $_SESSION['id'] = $id;

        echo 'ok';
    } else {

        // Mensaje de error
        echo 'error - existente';
    }
}


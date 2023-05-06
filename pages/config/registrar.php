<?php


require_once('../databases/connectToBD.php');


//Se validan que los campos NO esten vacios
if (strlen($_POST['nombre']) == 0  ||
strlen($_POST['apellido']) == 0  ||
strlen($_POST['documento']) == 0  ||
strlen($_POST['telefono']) == 0  ||
strlen($_POST['rol']) == 0  ||
strlen($_POST['correo']) == 0  ||
strlen($_POST['clave']) == 0 ) {
    //mensaje de error
    echo 'campos vacios';
} else {
    //se toman las variables enviadas
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $documento = $_POST['documento'];
    $correo = $_POST['correo'];
    $clave = $_POST['clave'];
    $rol = $_POST['rol'];
    $estado = 'activo';
    $fecha = date('d/m/Y');

    //Se verifica que el estudiante a insertar ya no este registrada
    $consulta = "SELECT * from usuarios WHERE correo = ?";
    $sentencia = $mbd->prepare($consulta);
    $sentencia->bindParam(1, $correo);
    $sentencia->execute();
    $fila = $sentencia->rowCount();

    //Se valida
    if ($fila < 1) {

        //Al validar que la lista no se encuentra registrada se registra
        $consultainsert = "INSERT INTO usuarios( nombre,apellido, documento, correo, clave, ultima_sesion, fecha, rol, estado ) VALUES(?,?,?,?,?,?,?,?,?)";
        $sentenciainsert = $mbd->prepare($consultainsert);
        $sentenciainsert->execute(array($nombre, $apellido, $documento,$correo,$clave,$fecha,$fecha, $rol, $estado));
        $filas = $sentenciainsert->rowCount();
        $id = $mbd->lastInsertId();
        //Se verifica que la fila se inserto

        echo 'ok';
    } else {

        // Mensaje de error
        echo 'existente';
    }
}


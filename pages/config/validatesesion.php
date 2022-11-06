<?php

//sesion activa
session_start();

//Se valida que exista la palabra sesion
if (!$_SESSION) {

    //Se redirecciona a l login
    header('Location:../index');
    die();
} else {

    //Si existe la sesion se toman los datos del usuario
    $id = $_SESSION['id'];
    $consulta = "SELECT * from usuarios WHERE id = ?";
    $sentencia = $mbd->prepare($consulta);
    $sentencia->bindParam(1, $id);
    $sentencia->execute();
    $filas = $sentencia->rowCount();


    $resultado = $sentencia->fetch();
    $nombre  = $resultado['nombre'];
    $apellido  = $resultado['apellido'];
}

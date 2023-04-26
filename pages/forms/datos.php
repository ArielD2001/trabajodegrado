<?php
include('../../assets/loader.html');
include('../databases/connectToBD.php');
//sesion activa
session_start();

//Se valida que exista la palabra sesion
if (!$_SESSION) {

    //Se redirecciona a l login
    header('Location:../../index');
    die();
} else {

    //Si existe la sesion se toman los datos del usuario
    $idglobal = $_SESSION['id'];
    $consulta = "SELECT * from usuarios WHERE id = ?";
    $sentencia = $mbd->prepare($consulta);
    $sentencia->bindParam(1, $idglobal);
    $sentencia->execute();
    $filas = $sentencia->rowCount();


    $resultado = $sentencia->fetch();
    $nombre  = $resultado['nombre'];
    $apellido  = $resultado['apellido'];
    // $avatar    = $resultado['avatar'];
}



if(isset($_GET)){
    $ide = base64_decode($_GET['student']);
    $idl = base64_decode($_GET['list']);

    $consultaestudiante = "SELECT * FROM estudiantes WHERE id = ?";
    $sentenciaestudiante = $mbd->prepare($consultaestudiante);
    $sentenciaestudiante->bindParam(1,$ide);
    $sentenciaestudiante->execute();
    $estudiante = $sentenciaestudiante->fetch();


    $consultalista = "SELECT * FROM listas WHERE id = ?";
    $sentencialista = $mbd->prepare($consultalista);
    $sentencialista->bindParam(1,$idl);
    $sentencialista->execute();
    $lista = $sentencialista->fetch();


    $consultanota = "SELECT * FROM $preguntas WHERE id_estudiante = ?";
    $sentencianota = $mbd->prepare($consultanota);
    $sentencianota->bindParam(1,$ide);
    $sentencianota->execute();
    $notas = $sentencianota->fetch();
    $cnotas = $sentencianota->rowCount();


    $consultanotat = "SELECT * FROM modulo_nota  WHERE id_estudiante = ?";
    $sentencianotat = $mbd->prepare($consultanotat);
    $sentencianotat->bindParam(1,$ide);
    $sentencianotat->execute();
    $notat = $sentencianotat->fetch();
}   


?>
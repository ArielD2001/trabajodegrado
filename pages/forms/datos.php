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

    //Informacion del Usuario (Profesor)
    $consulta = "SELECT * from usuarios WHERE id = ?";
    $sentencia = $mbd->prepare($consulta);
    $sentencia->bindParam(1, $idglobal);
    $sentencia->execute();
    $filas = $sentencia->rowCount();


    $resultado = $sentencia->fetch();
    $nombre  = $resultado['nombre'];
    $apellido  = $resultado['apellido'];
}



if(isset($_GET)){
    $ide = base64_decode($_GET['student']);
    $idl = base64_decode($_GET['list']);

    //informacion del estudiante para mostrar en el fomulario
    $consultaestudiante = "SELECT * FROM estudiantes WHERE id = ?";
    $sentenciaestudiante = $mbd->prepare($consultaestudiante);
    $sentenciaestudiante->bindParam(1,$ide);
    $sentenciaestudiante->execute();
    $estudiante = $sentenciaestudiante->fetch();

    //informacion de la lista
    $consultalista = "SELECT * FROM listas WHERE id = ?";
    $sentencialista = $mbd->prepare($consultalista);
    $sentencialista->bindParam(1,$idl);
    $sentencialista->execute();
    $lista = $sentencialista->fetch();
    //Id del modulo
    $idm = $lista['id_modulo'];

    //Infomacion del modulo
    $sqlList = 'SELECT * FROM modulos WHERE id = ?';
    $sentenciaM = $mbd->prepare($sqlList);
    $sentenciaM->bindParam(1, $idm);
    $sentenciaM->execute();
    $datam = $sentenciaM->fetch();
    $modulo   = $datam['nombre'];

    //Se valida si se va utilizar un formulario que se divide en rotaciones
    if(isset($_GET['r'])){

        //Numero de la rotacion enviada por GET
        $rotacion = $_GET['r'];
        
        //Datos de la calificacion de la rotacion correspondiente
        $consultanota = "SELECT * FROM $preguntas WHERE id_estudiante = ? AND rotacion = ?";
        $sentencianota = $mbd->prepare($consultanota);
        $sentencianota->bindParam(1, $ide);
        $sentencianota->bindParam(2, $rotacion);
        $sentencianota->execute();
        $notas = $sentencianota->fetch();
        $cnotas = $sentencianota->rowCount();

        //Datos de la nota final de la rotacion
        $consultanotat = "SELECT * FROM rotacion  WHERE id_estudiante = ? AND rotacion = ?";
        $sentencianotat = $mbd->prepare($consultanotat);
        $sentencianotat->bindParam(1, $ide);
        $sentencianotat->bindParam(2, $rotacion);
        $sentencianotat->execute();
        $notat = $sentencianotat->fetch();

    }else{

        //Si no es de un formulario de rotaciones solo se extrae la informacion de las notas del formulario
        $consultanota = "SELECT * FROM $preguntas WHERE id_estudiante = ?";
        $sentencianota = $mbd->prepare($consultanota);
        $sentencianota->bindParam(1,$ide);
        $sentencianota->execute();
        $notas = $sentencianota->fetch();
        $cnotas = $sentencianota->rowCount();

        //Y se obtiene la nota definitiva
        $consultanotat = "SELECT * FROM modulo_nota  WHERE id_estudiante = ?";
        $sentencianotat = $mbd->prepare($consultanotat);
        $sentencianotat->bindParam(1,$ide);
        $sentencianotat->execute();
        $notat = $sentencianotat->fetch();
    }
   
}else{
    header('Location:../../index');

}   

include('info.php'); 


?>
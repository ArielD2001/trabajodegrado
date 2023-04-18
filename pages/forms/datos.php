<?php
include('../../assets/loader.html');
include('../databases/connectToBD.php');
include('../config/validatesesion.php');


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


    $consultanota = "SELECT * FROM preguntasm1 WHERE id_estudiante = ?";
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
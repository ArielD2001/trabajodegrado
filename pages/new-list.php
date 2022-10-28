<?php
include('databases/connectToBD.php');

$dato='6';
$consulta = "UPDATE listas SET semestre = ? ";
        $sentencia = $mbd->prepare($consulta);
        $sentencia->bindParam(1, $dato);
        $sentencia->execute();
<?php 
include('../databases/connectToBD.php');

$id = $_POST['id'];
$check = $_POST['check'];
$estado = $check == 'false' ? 'inactivo' : 'activo';
    $consulta = 'UPDATE usuarios set estado = ? WHERE id = ?';
    $sentencia = $mbd->prepare($consulta);
    $sentencia->bindParam(1,$estado);
    $sentencia->bindParam(2,$id);
    $sentencia->execute();
    $filas = $sentencia->rowCount();

    if($filas > 0){
        echo 'ok';
    }
    

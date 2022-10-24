<?php 
session_start();
if(!$_SESSION){
    header('Location:../index');
    die();
} 
$id = $_SESSION['id'];
$consulta = "SELECT * from usuarios WHERE id = ?";
$sentencia= $mbd->prepare($consulta);
$sentencia->bindParam(1, $id);
$sentencia->execute();
$filas=$sentencia->rowCount();
echo $filas;

if($filas > 0){
$resultado = $sentencia->fetch();
$nombre  = $resultado['nombre'];
$apellido  = $resultado['apellido'];
}
?>
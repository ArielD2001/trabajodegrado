<?php
include('../databases/connectToBD.php');

$email = $_POST['email'];
$password = $_POST['password'];

//Se comprueba que los campos no esten vacios
if ($email == '' || $password == '') {
    //Mensaje de error
    echo 'campos vacios';

} else {

    $consulta  = 'SELECT * FROM usuarios WHERE correo = ? AND  clave = ?';
    $sentencia = $mbd->prepare($consulta);
    $sentencia->execute(array($email, $password));
    $filas = $sentencia->rowCount();
    $datos = $sentencia->fetch();

    if($filas > 0){
       if($datos['estado'] == 'activo'){
        if($datos['rol'] == 'ADMIN'){
            session_start();
            $_SESSION['admin'] = $datos['id'];
            $sentencia = null;
            echo 'admin';
        }else{
            session_start();
            $_SESSION['id'] = $datos['id'];
            $sentencia = null;
            echo 'ok';
        }
       }else{
        echo 'no activo';
       }
    }

    else{

     echo 'error datos';
    }
}

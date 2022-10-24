<?php

use LDAP\Result;

if (isset($_POST['loguear'])) {
    if (strlen($_POST['email']) == 0 || strlen($_POST['password'] == 0)) {
        echo "<style>.loader{display: none !important; animation:none !important;</style>";
        echo '<p class="text-red-500 text-xs italic mt-2"  >Por favor complete todos los campos.</p>';
    } else {
        $email = $_POST['email'];
        $password = $_POST['password'];


        $consulta = "SELECT * from usuarios WHERE correo = ?  AND clave = ?";
        $sentencia= $mbd->prepare($consulta);
        $sentencia->bindParam(1, $email);
        $sentencia->bindParam(2, $password);
        $sentencia->execute();
        $filas=$sentencia->rowCount();
        // echo $filas;

        if($filas > 0){
        $resultado = $sentencia->fetch();
            session_start();
            $_SESSION['id'] = $resultado['id'];
            header('location: pages/home');
        }
        else{
        echo "<style>.loader{display: none !important; animation:none !important;</style>";
        echo '<p class="text-red-500 text-xs italic mt-2"  >Correo o contraseña incorrecta</p>';
        }
    }
}elseif(isset($_POST['registrar'])){
    echo "<style>.loader{display: none !important; animation:none !important;</style>";
}


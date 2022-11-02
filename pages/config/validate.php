<?php
include('../databases/connectToBD.php');


    echo "<style>.loader{display: none !important; animation:none !important;</style>";

    if (strlen($_POST['email']) == 0 || strlen($_POST['password'] == 0)) {
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

        if($filas > 0){
            $res = $sentencia->fetch();
            session_start();
            $_SESSION['id'] = $res['id'];
            $sentencia=null;
            print "<script> window.location = 'pages/home';</script>";
        }
        else{
        echo '<p class="text-red-500 text-xs italic mt-2"  >Correo o contraseña incorrecta</p>';
        }
    }


/* elseif (isset($_POST['registrar'])) {
    echo "<style>.loader{display: none !important; animation:none !important;</style>";

    if (
        strlen($_POST['nombre'])     < 3 ||
        strlen($_POST['apellido'])  < 5  ||
        strlen($_POST['correo'])    < 5 ||
        strlen($_POST['contraseña']) < 5 ||
        strlen($_POST['documento'])  < 5
    ) {
        echo '<p class="text-red-500 text-xs italic mt-2"  >Por favor complete los campos correctamente.</p>';
    } else {
        $_nombre = strtolower(trim($_POST['nombre']));
        $_apellido = strtolower(trim($_POST['apellido']));
        $_correo = strtolower(trim($_POST['correo']));
        $_contraseña = $_POST['contraseña'];
        $_documento = $_POST['documento'];
        $fecha = date("d/m/Y");
        $sesion = $fecha;

        //verificar si el usuario esta resgitrado
        $consulta = "SELECT * from usuarios WHERE correo = ? ";
        $sentencia = $mbd->prepare($consulta);
        $sentencia->bindParam(1, $_correo);
        $sentencia->execute();
        $filas = $sentencia->rowCount();
        // echo $filas;

        if ($filas > 0) {
            echo '<p class="text-red-500 text-xs italic mt-2"  >El correo ingresado ya tiene un cuenta.</p>';
        } else {
            //Consulta para insertar usuario
            $consultainsert = "INSERT INTO usuarios( nombre, apellido, correo, clave,ultima_sesion, documento,fecha) VALUES(?,?,?,?,?,?,?)";
            $sentenciainsert = $mbd->prepare($consultainsert);
            $sentenciainsert->execute(array($_nombre, $_apellido, $_correo, $_contraseña, $sesion, $_documento, $fecha));
            $id = $mbd->lastInsertID();
            $_SESSION['id'] = $id;
            
           print "<script>window.setTimeout(function() { window.location = 'pages/home' }, 10);</script>";
            // echo $id;
        }
    }
}
*/
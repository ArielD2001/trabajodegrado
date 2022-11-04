    <?php
    include('../databases/connectToBD.php');

    $lista = base64_decode($_GET['list']);
    $consulta = "DELETE  from listas WHERE id =?";
    $sentencia = $mbd->prepare($consulta);
    $sentencia->bindParam(1, $lista);
    $sentencia->execute();

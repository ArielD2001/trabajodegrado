<?php


require_once('../databases/connectToBD.php');
require_once('../../vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Spreadsheet;


$adjuntoName =   basename($_FILES['adjunto']['name']);
$file_ext = pathinfo($adjuntoName, PATHINFO_EXTENSION);

$tmp =   $_FILES['adjunto']['tmp_name'];
$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($tmp);
$data = $spreadsheet->getActiveSheet()->toArray();


    foreach ($data as $dato) {
        $nombre_estudiante = $dato[0];
        $documento = $dato[1];

        echo $nombre_estudiante;
        echo $documento.'<br>';

        $consulta_estudiante = 'INSERT INTO estudiandes(nombre, documento, id_lista) VALUES(?,?,?)';
        $sentencia_estudiante = $mbd->prepare($consulta_estudiante);
    }

// if (isset($_FILES['adjunto'])) {

//     //Se toman los valores del archivo adjunto
//     $adjuntoName =   $_FILES['adjunto']['name'];
   
    //     $tipo = pathinfo($adjuntoName, PATHINFO_EXTENSION);

//     //Se le asigna una variable a los datos enviados por metodo POST
//     parse_str($_POST["data"], $data);

//     // Se validan que los campos NO esten vacios
//     if (strlen($data['nombre-list']) == 0  || strlen($data['semestre']) == 0) {

//         //mensaje de error
//         echo 'campos vacios';
//     } else {

//         // Se valida el tipo de fichero que se va a enviar 
//         if ($tipo == 'xls' || $tipo == 'xlsx') {

//             //Al ser un fichero valido se toman las variables enviadas
//             $nombre = $data['nombre-list'];
//             $semestre = $data['semestre'];
//             $fecha = date('d/m/y');
//             $adjuntoName;

//             //Se verifica que la lista a insertar ya no este registrada
//             $consulta = "SELECT * from listas WHERE nombre = ?  AND semestre = ?";
//             $sentencia = $mbd->prepare($consulta);
//             $sentencia->bindParam(1, $nombre);
//             $sentencia->bindParam(2, $semestre);
//             $sentencia->execute();
//             $fila = $sentencia->rowCount();

//             //Se valida
//             if ($fila < 1) {

//                 //Al validar que la lista no se encuentra registrada se registra
//                 $consultainsert = "INSERT INTO listas( nombre, semestre, fecha) VALUES(?,?,?)";
//                 $sentenciainsert = $mbd->prepare($consultainsert);
//                 $sentenciainsert->execute(array($nombre, $semestre, $fecha));
//                 $filas = $sentenciainsert->rowCount();

//                 //Se verifica que la fila se inserto
//                 if ($filas > 0) {
                    
//                     echo 'ok';
//                     //Se toma el id de la lista insertada

//                 } else {
//                     //Mensaje de error
//                     echo 'error - consulta';
//                 }
//             } else {

//                 //Mensaje de error
//                 echo 'error - existente';
//             }
//         } else {

//             //Mensaje de error
//             echo 'error - tipo';
//         }
//     }
// } else {
//     //Mensaje de error
//     echo 'campos vacios';
// }

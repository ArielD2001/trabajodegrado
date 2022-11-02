<?php
include('databases/connectToBD.php');
include('config/validatesesion.php');
//Recibir lista excel
$files = $_FILES['nombre-list'];
$files = file_get_contents($files['tmp_name']);
print_r($files);
exit;

$files = explode("\n", $files);
$files = array_filter($files);
//Convertir registros de excel en un array
foreach($files as $file){
    $file_list[] = explode("," , $file);
}

foreach($file_list as $filedata){
    $mbd->query("INSERT INTO estudiantes(nombre,id,id_lista) VALUES ('{$filedata[0]}','{$filedata[1]}','{$filedata[2]}')");
}
?>
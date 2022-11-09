<?php
$sqlmodulos = "SELECT * from modulos ";
$sentenciamodulos = $mbd->prepare($sqlmodulos);
$sentenciamodulos->execute();
$filasmodulos = $sentenciamodulos->rowCount();

$modulos = $sentenciamodulos->fetchAll();
?>
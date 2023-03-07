<?php
$sqllistas = "SELECT * from listas WHERE id_modulo = ? AND id_usuario = ? ORDER BY id DESC ";
$sentencialistas = $mbd->prepare($sqllistas);
$sentencialistas->bindParam(1, $idmodulo);
$sentencialistas->bindParam(2, $idglobal);
$sentencialistas->execute();
$filas2 = $sentencialistas->rowCount();
$listas = $sentencialistas->fetchAll();
?>
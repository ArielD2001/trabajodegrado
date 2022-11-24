<?php
$sqllistas = "SELECT * from listas WHERE id_usuario = ? ORDER BY id DESC ";
$sentencialistas = $mbd->prepare($sqllistas);
$sentencialistas->bindParam(1, $idglobal);
$sentencialistas->execute();
$filas2 = $sentencialistas->rowCount();
?>
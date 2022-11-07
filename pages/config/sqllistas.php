<?php
$sqllistas = "SELECT * from listas ORDER BY id DESC ";
$sentencialistas = $mbd->prepare($sqllistas);
$sentencialistas->execute();
$filas2 = $sentencialistas->rowCount();
?>
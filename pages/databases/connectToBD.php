<?php

$user = 'root';
$pass = '';
try {
    $mbd = new PDO('mysql:host=localhost;dbname=prueba', $user, $pass); 
   echo 'bien hecho';
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
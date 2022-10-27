<?php

$user = 'root';
$pass = '';
try {
    $mbd = new PDO('mysql:host=localhost;dbname=proyecto', $user, $pass); 
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
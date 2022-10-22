<?php 
session_start();
if(!$_SESSION){
    header('Location:../index');
    die();
} 
$email = $_SESSION['email'];
?>
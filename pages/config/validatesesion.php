<?php 
session_start();
if(!$_SESSION){
    header('Location:../index');
    die();
} 
$id = $_SESSION['id'];
?>
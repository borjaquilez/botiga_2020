<?php
session_start();
$email='olorcar@gmail.com';
$username='Olorcar The Barbarian';
$password='12345';

if ($_GET['email']==$email and $_GET['password']==$password){
    $_SESSION["username"]=$username;
    header('location:../index_botiga copy.php');
}else{
    header('location:login.php?m=1'); /* El comando ?m=1 , dintre del comando header, genera un "formulari"
    get, i reenviem una variable, mitjançant el mètode get a la pàgina login.php. */
}

?>
<?php
$usuario = $_POST ["usuario"];
$contrasenia = $_POST ["pass"];
session_start();
$_SESSION["usuario"]=$usuario;

$ckusuario= "admin";
$ckpass = 1234;

if ($usuario==$ckusuario && $contrasenia==$ckpass   ) {
  header ("location:listar.php" );
} else {
   header ("location: pagerror.html");
 }


 ?>

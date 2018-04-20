<?php
$user=$_POST['userr'];
$pass=$_POST['passw'];
require '../../controlador/conexion.php';
$buscarus=new buscaru();
$buscarus->conectar();
$buscarus->validar($user,$pass);
?>

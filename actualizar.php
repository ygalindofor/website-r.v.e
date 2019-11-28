<?php

$server="localhost";
$usuario="root";
$contraseña="";
$bd="ejemplo";

$conexion=mysqli_connect($server,$usuario,$contraseña,$bd)
or die ("Error de la conexion");

$codigo=$_POST['txtcodigo'];
$nombre=$_POST['txtnombre'];
$edad=$_POST['txtedad'];


mysqli_query($conexion,"UPDATE datos set nombre='$nombre',edad='$edad'where codigo='$codigo'")
or die ("Error al Actualizar");

mysqli_close($conexion);
require("index1.php");


?>

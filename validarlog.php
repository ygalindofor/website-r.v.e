<?php
$server="localhost";
$usuario="root";
$contraseña="";
$bd="proyecto1";


$conexion=mysqli_connect($server,$usuario,$contraseña,$bd);



$usuario=$_POST['usuario'];
$clave=$_POST['clave'];

$resultado= mysqli_query($conexion,"SELECT * FROM coordinador WHERE email_coor='$usuario' and pass_coor='$clave'")
or die ("Error al traer los datos");

if($proceso = mysqli_fetch_array($resultado)){


	header("location:index2.html");

}else{

	header("location:login.php");
}

?>

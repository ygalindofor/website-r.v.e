<!DOCTYPE>
<html>
<head>
<title>Ver</title>
<meta charset="UTF-8">
<title> R.V.E  </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>

	<div class="row">
	  <div class="col-md-6 col-lg-2">
	    <img src="logo.png">
	  </div>
	    <div class="col-sm-3 col-md-6 col-lg-8 text-center "><h1>Educando con Realidad Virtual</h1></div>
	    <div class="col-sm-6 col-md-6 col-lg-2">
	    <img src="figuras.png">
	  </div>
	</div>
<?php

$server="localhost";
$usuario="root";
$contraseña="";
$bd="proyecto";

$conexion=mysqli_connect($server,$usuario,$contraseña,$bd)
or die ("Error de la conexion");

$consulta= mysqli_query($conexion,"SELECT *from coordinador")
or die ("Error al traer los datos");

echo '<table border="1">';
echo  '<tr>';
echo  '<th id="codigo"> Cedula </th>';
echo  '<th id="nombre"> Nombre  </th>';
echo  '<th id="edad"> Email  </th>';


echo  '</tr>';

while($extraido=mysqli_fetch_array($consulta))
{
	echo '<tr>';
	echo '<td>',$extraido['cod_coor'],'</td>';
	echo '<td>',$extraido['nom_coor'],'</td>';
	echo '<td>',$extraido['email_coor'],'</td>';
	echo '</tr>';

}
$consulta= mysqli_query($conexion,"SELECT *from institucion")
or die ("Error al traer los datos");
while($extraido=mysqli_fetch_array($consulta))
{
	echo '<tr>';

	echo '<td>',$extraido['nom_inst'],'</td>';

	echo '</tr>';

}

mysqli_close($conexion);
echo '</table>';


?>
</form>

<form class="contacto" action="index.html" method="POST">
	<div><input type="submit" value="Volver Principal"></div>
</form>

</body>

</html>

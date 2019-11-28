<!DOCTYPE html>
<html lang="en">

	<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Title Page-->
		<title> R.V.E  </title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
		<meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">

	</head>

<body>
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading" style="background-image: url(img/niñarve.jpg);"></div>
                <div class="card-body">
                    <h2 class="title">Eliminar Registros</h2>
										<form class="contacto" action="eliminar.php" method="POST">
											<div class="input-group">
											<div><input  class="input--style-3" id="cedula"class="codigo" type="number" name="txtcodigo1" placeholder="Ingresar Cedula" maxlength="10" >
											</div>
										</div>
											<div><input class="btn btn--pill btn--green" type="submit" value="Eliminar Registro" name="btnEliminar"></div>
										</form> <br> <br>
										<h2 class="title">Ver registros</h2>
										<form class="contacto" action="ver.php" method="POST">
											<div><input class="btn btn--pill btn--green" type="submit" value="Ver Registros" name="btnVer"></div>
										</form> <br>
										<form class="contacto" action="index.html" method="POST">
											<div><input class="btn btn--pill btn--green" type="submit" value="Volver Principal"></div>
										</form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>


</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->

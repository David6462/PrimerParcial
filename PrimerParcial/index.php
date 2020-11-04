<?php
require "logica/Articulo.php";
require "persistencia/Conexion.php";

$pid = null;
?>
<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet"
	href="https://use.fontawesome.com/releases/v5.11.1/css/all.css" />
<link href="https://bootswatch.com/4/superhero/bootstrap.css"
	rel="stylesheet" />	
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script
	src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script
	src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<title>Articulos</title>
<link rel="icon" type="image/png" href="img/logo.png">
</head>
<body>
<?php 
if (isset($pid)){
    include "presentacion/menu.php";
    include $pid;
    header("Location: index.php");
    
}else{
    include "presentacion/inicio.php";
}

?>
</body>
</html>

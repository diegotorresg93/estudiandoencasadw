<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Variables de variables</title>
</head>
<?php
	$deuda = 12000;
	$Barranquilla = 22000000;
	$bog = 4000000;
	$mde = 1400000;
	$ciudad = "Barranquilla";
	print "<p>La poblacion de la ciudad $ciudad es de ${$ciudad} habitantes</p>";
	
	$ciudad = "bog";
	print "<p>La poblacion de la ciudad $ciudad es de ${$ciudad} habitantes</p>";
	
	$ciudad = "mde";
	print "<p>La poblacion de la ciudad $ciudad es de ${$ciudad} habitantes</p>";
	
  //unset($deuda);
  //print $deuda;
//Creamos una constante
define("TASA_CAMBIO",3800);
print "Tu deuda en dolares es de: ".($deuda*TASA_CAMBIO);
	?>
<body>
</body>
</html>

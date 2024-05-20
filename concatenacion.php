<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
	
	$nombre = "Gabriela";
	$Apellido = "Gonzalez";
	//Las 2 formas de concatenar
	print "El nombre y apellido es: " .$nombre." ".$Apellido;
	
	print "<br>El nombre y apellido es: $nombre $Apellido";
	
	print "<br>El nombre y apellido es: \"$nombre $Apellido\"";//secuencia de escape
	
	print ("<br>El nombre y apellido es: $nombre $Apellido"); //version mas moderna html5 y tambien se puede escribir con echo
	?>
	
	
</body>
</html>
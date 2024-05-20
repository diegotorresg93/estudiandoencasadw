<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<?php
//Cadena
	$cadena = "Hola mundo";
	$anios12 = "12";
	$nombre = "Diego";
	$apellido = "Torres";
	
//Enteras Integer
	$edad = 12;
	$deuda = -1500000;
	
//Disponibles o decimales;
	$ingreso = 1000.50;
	
//Variables booleanas
	$casado = true;
	
print ("El nombre completo es: $nombre $apellido ");
echo ("y soy un espia al servicio de su Majestad...<br><br>");
	
	
	print $edad + $anios12;
	print "<br>";
    print $edad - $anios12;
	print "<br>";
	print $edad * $anios12;
	print "<br>";
	print $edad / $anios12;
	print "<br>";
	print $edad % $anios12;
	print "<br>";
	
	print $edad = $edad +5;
	print "<br>";
	print $edad += 5;
	print "<br>";
	print $edad -= 7;
	print "<br>";
	print $edad /= 2;
	print "<br>";
	print $edad *= 3;
	print "<br>";
	print $edad %= 2;
	print "<br>";
	$edad = 10;
	$edad++;
	print $edad;
	print "<br>";
	$edad--;
	print $edad;
	print "<br>";
?>
	
	
<body>
</body>
</html>

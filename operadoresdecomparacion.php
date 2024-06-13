<!doctype html>
<html>
<head>
<meta charset="utf-8">
<set language="es">
<title>Operadores de comparación</title>
<body>
	<?php
	/*
	$edad =16;
	if($edad>40){
		
		print "<p>Bienvenido a nuestra pagina, esperemos no sea peligroso para su salud...</p>";
		} else if($edad>30){
		print "<p>Sabemos que aqui encontrara lo que lleva mucho tiempo buscando...</p>";
	    }else if ($edad>18){
		print "<p>Estas en tu momento de comprar nuestros productos</p>";
	    }else {
		print "<p>Lo sentimos, no puedes tener acceso a la pagina</p>";
	    }
	print "<p>Tu edad es de $edad años</p>";
	
	*/
	//Mayor que >
	//Menor que <
	//Menor o igual <=
	//Mayor o igual >=
	//Igualdad ==
	/*$edad = "18";
	if ($edad == 18){
		print "Tienes dieciocho años";
	}*/
	//Igualdad extricta ===
	/*$edad = "18";
	if ($edad === 18){
		print "Tienes dieciocho años";
	} else {
		print "Posiblemente tienes dieciocho, pero debe ser valor numerico";
	}*/
	//Diferencia
	$edad = "18";
	if ($edad != 18){
		print "No tienes dieciocho años";
	} else {
		print "Si tienes 18 años, pasa por tu credencial para votar...";
	}
	?>
	
</body>
</html>
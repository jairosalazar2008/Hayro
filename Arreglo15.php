<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php
$alumnos = [
	"Mario"=>8,
	"axel"=>9,
	"cesar"=>5,
	"emilio"=>10,
	"miguel"=>6
 ];
 foreach ($alumnos as $alumno => $calificacion) {
 	echo "La calificacion de ". $alumno . " es ". $calificacion. "<br>";
 }
arsort($alumnos);
echo "<br>". " Despues de ordenar: " .   "<br>" . "<br>" ;
foreach ($alumnos as $alumno => $calificacion) {
 	echo "La calificacion de  $alumno  es  $calificacion" . "<br>";
 }
 ?>
</body>
</html>
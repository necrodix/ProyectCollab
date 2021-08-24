<!doctype html>
<html>
<head>
<meta charset="utf-8">


</head>

<body>

<?php

include ("conexion_baseDatos.php");

$consulta= "SELECT * from usuario";
$resultado= mysqli_query($conexion, $consulta);


while ($fila=mysqli_fetch_array($resultado)){
	echo"<table><tr><td> RFC ";
	echo $fila['RFC']."</td><td> nombre ";
	echo $fila['nombre']."</td><td> contraseña ";
	echo $fila['contraseña']."</td><td></tr></table>";
	
	
	
}


mysqli_close($conexion);



?>



</body>
</html>

<!doctype html>
<html>
<head>

</head>

<body>

<?php

$db_host="localhost";
$db_nombre="sistemco_controlcorreduria";
$db_usuario="root";
$db_contraseña="";

//$db_usuario="sistemco_controlcorreduria";
//$db_contraseña="dei1234QA678";

$conexion=mysqli_connect($db_host, $db_usuario, $db_contraseña, $db_nombre);

if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";



?>


</body>
</html>

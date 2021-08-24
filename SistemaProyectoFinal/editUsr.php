<?php
	include("connect.php");
	$rrfc = $_POST['txtid'];
	$password = $_POST['password'];
	$usuario = $_POST['usr'];
	$rfc = $_POST['rfc'];
	if ($usuario!=null||$rfc!=null) {
		$update = "UPDATE `usuario` SET contraseña='$password' RFC='$rfc',nombre='$usuario' WHERE RFC='$rrfc'";
		$resul = mysqli_query($con, $update);
		if ($resul=1) {
			header("location:usuarios_editar.php");
		}
	}
?>

<?php
error_reporting(0);

	
	$id=$_GET['fc'];
	$sql = "SELECT `RFC`, `nombre` FROM `usuario` WHERE RFC = '$id'";
	$resultado = mysqli_query($con,$sql);
	while ($muestra=mysqli_fetch_assoc($resultado)) {


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/estilos.css"/>
	<link rel="stylesheet" href="css/tablas.css"/>
	<title>Editar Usuarios</title>
</head>
<body>
<div class="navbar">
  <div class="dr">
    <div class="dropdown">
      <button class="dropbtn">TRABAJOS 
      </button>
      <div class="dropdown-content">
      <a class="active" href="usuarios_editar.php">USUARIOS</a>
      <a class="active" href="avaluos_editar.php">AVALUOS</a>
      <a href="cancelacion_validacion_fe_de_erratas_editar.php">CANCELACION/VALIDACION/FE DE ERRATAS</a>
      <a href = "fe_de_hechos_editar.php"> FE DE HECHOS</a>
      <a href = "carta_poder_editar.php"> CARTAS PODER</a>
      <a href = "sociedades_editar.php"> SOCIEDADES </a> 
      <a href = "clientes_editar.php">CLIENTES</a> 
      <a href = "ratificacion_de_firma_editar.php">RATIFICACIONES</a>
      </div>

    </div> 
  </div>
<div class="izq">
  <a  href="cerrar_sesion.php">CERRAR SESION</a>
  </div>
</div>

<br>

<div>
	<form method="POST"> 
		<input name="txtid" type="hidden" value="<?php echo($muestra['RFC']); ?>">
		<label>USUARIO</label>
		<input name="usr" type="text" value="<?php echo($muestra['nombre']); ?>">
		<br><br>
		<label>USUARIO</label>
		<input name="password" type="password" value="<?php echo($muestra['password']); ?>">
		<br><br>
		<label>RFC</label>
		<input name="rfc" type="text" value="<?php echo($muestra['RFC']); ?>"><br><br>
		<button clas="btnEdt" name="" type="submit" >ACTUALIZAR</button>
	</form>
<?php } ?>
</div>

</body>
</html>
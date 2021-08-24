
<?php
error_reporting(0);

	include("connect.php");
	$id=$_GET['fc'];
	$sql = "SELECT * FROM `avaluo` WHERE clave_catastral = '$id'";
	$resultado = mysqli_query($con,$sql);
	while ($muestra=mysqli_fetch_assoc($resultado)) {


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Editar Avaluo</title>
	<link rel="stylesheet" href="css/estilos.css"/>
	<link rel="stylesheet" href="css/tablas.css"/>
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

<div>
	<form method="POST"> 
		<h2 class="center">EDITAR</h2>
		<input name="txtid" type="hidden" value="<?php echo $muestra["clave_catastral"]; ?>">
		<label>CLAVE CATASTRAL</label>
		<input name="clv" type="text" value="<?php echo $muestra["clave_catastral"]; ?>"><br>
		<label>TIPO DE AVALUO</label>
		<input name="tpav" type="text" value="<?php echo $muestra["tipo_de_avaluo"]; ?>"><br>
		<label>REALIZACOPN FECHA</label>
		<input name="refe" type="text" value="<?php echo $muestra["realizacion_fecha"]; ?>"><br>
		<label>LUGAR AVALUO</label>
		<input name="lugav" type="text" value="<?php echo $muestra["lugar_avaluo"]; ?>"><br>
		<label>RFC CLIENTE</label>
		<input name="rfclt" type="text" value="<?php echo $muestra["RFC_cliente"]; ?>"><br>
		<label>DESCRIPCION</label>
		<input name="desc" type="text" value="<?php echo $muestra["descripcion"]; ?>"><br>
		<button name="" type="submit" >ACTUALIZAR</button>
	</form>
<?php } ?>
</div>

<?php
	$rrfc = $_POST['txtid'];
	$clave = $_POST['clv'];
	$tipo = $_POST['tpav'];
	$fecha = $_POST['refe'];
	$lugar = $_POST['lugav'];
	$rfcl = $_POST['rfclt'];
	$desc = $_POST['desc'];
	
	if ($clave!=null||$tipo!=null||$fecha!=null||$lugar!=null||$rfcl!=null||$desc!=null) {
		$update = "UPDATE `avaluo` SET clave_catastral= '$clave' ,tipo_de_avaluo= '$tipo',realizacion_fecha='$fecha',lugar_avaluo='$lugar',RFC_cliente='$rfcl',descripcion='$desc' WHERE clave_catastral='$rrfc'";
		$resul = mysqli_query($con, $update);
		if ($resul=1) {
			header("location:avaluos_editar.php");
		}
	}
?>
</body>
</html>


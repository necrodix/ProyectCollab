<?php
	include("connect.php");
	$rrfc = $_POST['txtid'];
	$fac = $_POST['fact'];
	$tipo = $_POST['tipo'];
	$fecha = $_POST['refe'];
	$doc = $_POST['doc'];
	$rfcl = $_POST['rfclt'];
	
	if ($fac!=null||$tipo!=null||$fecha!=null||$doc!=null||$rfcl!=null) {
		$update ="UPDATE  `cancelación_endoso_validación_y_fe_de_erratas_de_factura_o_pedim` SET `numero_de_factura/pedimento`='$fac', tipo='$tipo', documento='$doc', fecha_realizacion='$fecha', RFC_cliente='$rfcl' WHERE `numero_de_factura/pedimento`='$rrfc'";
		$resul = mysqli_query($con, $update);
		if ($resul=1) {
			header("location:cancelacion_validacion_fe_de_erratas_editar.php");
		}
	}
?>
<?php
error_reporting(0);
	
	$id=$_GET['fc'];
	$sql = "SELECT * FROM `cancelación_endoso_validación_y_fe_de_erratas_de_factura_o_pedim` WHERE `numero_de_factura/pedimento` = '$id'";
	$resultado = mysqli_query($con,$sql);
	while ($muestra=mysqli_fetch_assoc($resultado)) {

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
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
		<h2>EDITAR</h2>
		<input name="txtid" type="hidden" value="<?php echo $muestra["numero_de_factura/pedimento"]; ?>">
		<label>No. Factura/Pedimento</label>
		<input name="fact" type="text" value="<?php echo $muestra["numero_de_factura/pedimento"]; ?>"><br>
		<label>TIPO</label>
		<input name="tipo" type="text" value="<?php echo $muestra["tipo"]; ?>"><br>
		<label>REALIZACOPN FECHA</label>
		<input name="refe" type="text" value="<?php echo $muestra["fecha_realizacion"]; ?>"><br>
		<label>DOCUMENTO</label>
		<input name="doc" type="text" value="<?php echo $muestra["documento"]; ?>"><br>
		<label>RFC CLIENTE</label>
		<input name="rfclt" type="text" value="<?php echo $muestra["RFC_cliente"]; ?>"><br>
		<button name="" type="submit" >ACTUALIZAR</button>
	</form>
<?php } ?>
</div>


</body>
</html>


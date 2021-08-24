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

<?php
error_reporting(0);
	include("connect.php");
	$id=$_GET['fc'];
	$sql="SELECT * FROM carta_poder WHERE RFC_otorgante = '$id'";
	$resultado = mysqli_query($con,$sql);
	while ($muestra=mysqli_fetch_assoc($resultado)) {

?>

<div>
	<form method="POST"> 
		<h2>EDITAR</h2>
		<input name="txtid" type="hidden" value="<?php echo $muestra["RFC_otorgante"]; ?>">
		<label>RFC_Otorgante</label>
		<input name="rfco" type="text" value="<?php echo $muestra["RFC_otorgante"]; ?>"><br>
		<label>Fecha de Realización</label>
		<input name="refe" type="text" value="<?php echo $muestra["fecha_realizacion"]; ?>"><br>
		<label>RFC_Cliente</label>
		<input name="rfclt" type="text" value="<?php echo $muestra["RFC_cliente"]; ?>"><br>
		<button name="new" type="submit">Guardar</button>
	</form>
</div>

<?php } ?>
</div>

<?php
	$rrfc = $_POST['txtid'];
	$rfco = $_POST['rfco'];
	$fecha = $_POST['refe'];
	$rfcl = $_POST['rfclt'];
	
	if ($rfco!=null||$fecha!=null||$rfcl!=null) {
		$update ="UPDATE `carta_poder` SET RFC_otorgante='$rfco', fecha_realizacion='$fecha', RFC_cliente='$rfcl' WHERE RFC_otorgante='$rrfc'";
		$resul = mysqli_query($con, $update);
		if ($resul=1) {
			header("location:carta_poder_editar.php");
		}
	}
?>


</body>
</html>
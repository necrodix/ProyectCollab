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
	$sql="SELECT * FROM sociedades WHERE acta_numero = '$id'";
	$resultado = mysqli_query($con,$sql);
	while ($muestra=mysqli_fetch_assoc($resultado)) {

?>

<div>
	<form method="POST"> 
		<h2>EDITAR</h2>
		<input name="txtid" type="hidden" value="<?php echo $muestra["acta_numero"]; ?>">
		<label>No. Acta</label>
		<input name="acta" type="text" value="<?php echo $muestra["acta_numero"]; ?>"><br>
		<label>No. Libro</label>
		<input name="libro" type="text" value="<?php echo $muestra["libro_numero"]; ?>"><br>
		<label>Fecha de Realización</label>
		<input name="refe" type="text" value="<?php echo $muestra["realizacion_fecha"]; ?>"><br>
		<label>RFC_Cliente</label>
		<input name="rfclt" type="text" value="<?php echo $muestra["RFC_cliente"]; ?>"><br>
		<label>Nombre de Empresa Creada</label>
		<input name="emp" type="text" value="<?php echo $muestra["nombre_empresa_creada"]; ?>"><br>
		<button name="new" type="submit">Guardar</button>
	</form>
</div>

<?php } ?>
</div>

<?php
	$rrfc = $_POST['txtid'];
	$act = $_POST['acta'];
	$lib = $_POST['libro'];
	$fecha = $_POST['refe'];
	$rfcl = $_POST['rfclt'];
	$empr = $_POST['emp'];
	
	if ($act!=null||$lib!=null||$fecha!=null||$rfcl!=null||$empr!=null) {
		$update ="UPDATE `sociedades` SET acta_numero='$act', libro_numero='$lib', realizacion_fecha='$fecha', RFC_cliente='$rfcl', nombre_empresa_creada='$empr' WHERE acta_numero='$rrfc'";
		$resul = mysqli_query($con, $update);
		if ($resul=1) {
			header("location:sociedades_editar.php");
		}
	}
?>

	
</body>
</html>

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
<?php
error_reporting(0);
	include("connect.php");
	$id=$_GET['fc'];
	$sql="SELECT * FROM fe_de_hecho WHERE acta_numero = '$id'";
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
		<label>Lugar de Realización</label>
		<input name="lugar" type="text" value="<?php echo $muestra["lugar_realizacion"]; ?>"><br>
		<label>Descripción</label>
		<input name="desc" type="text" value="<?php echo $muestra["descripcion"]; ?>"><br>
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
	$lug = $_POST['lugar'];
	$desc = $_POST['desc'];
	
	if ($act!=null||$lib!=null||$fecha!=null||$rfcl!=null||$lug!=null||$desc!=null) {
		$update ="UPDATE `fe_de_hecho` SET acta_numero='$act', libro_numero='$lib', realizacion_fecha='$fecha', RFC_cliente='$rfcl', lugar_realizacion='$lug', descripcion='$desc' WHERE acta_numero='$rrfc'";
		$resul = mysqli_query($con, $update);
		if ($resul=1) {
			header("location:fe_de_hechos_editar.php");
		}
	}
?>


</body>
</html>
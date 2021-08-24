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
	$sql="SELECT * FROM ratificacion_de_firma WHERE RFC_del_ratificante = '$id'";
	$resultado = mysqli_query($con,$sql);
	while ($muestra=mysqli_fetch_assoc($resultado)) {

?>

<div>
  <form method="POST"> 
    <h2>EDITAR</h2>
    <input name="txtid" type="hidden" value="<?php echo $muestra["RFC_del_ratificante"]; ?>">
    <label>RFC del Ratificante</label>
    <input name="rfc" type="text" value="<?php echo $muestra["RFC_del_ratificante"]; ?>"><br>
    <label>Tipo de Ratificación</label>
    <input name="nombre" type="text" value="<?php echo $muestra["tipo_de_ratificacion"]; ?>"><br>
    <label>Fecha de Ratificación</label>
    <input name="tel" type="text" value="<?php echo $muestra["fecha_de_ratificacion"]; ?>"><br>
    <label>RFC_Cliente</label>
    <input name="dir" type="text" value="<?php echo $muestra["RFC_cliente"]; ?>"><br>
    <button name="new" type="submit">Guardar</button>
  </form>
</div>

<?php } ?>
</div>

<?php
	$rrfc = $_POST['txtid'];
	$act = $_POST['rfc'];
  $lib = $_POST['nombre'];
  $fecha = $_POST['tel'];
  $rfcl = $_POST['dir'];
  
  if ($act!=null||$lib!=null||$fecha!=null||$rfcl!=null) {
		$update ="UPDATE `ratificacion_de_firma` SET RFC_del_ratificante='$act', tipo_de_ratificacion='$lib', fecha_de_ratificacion='$fecha', RFC_Cliente='$rfcl' WHERE RFC_del_ratificante='$rrfc'";
		$resul = mysqli_query($con, $update);
		if ($resul=1) {
			header("location:ratificacion_de_firma_editar.php");
		}
	}
?>


  
</body>
</html>
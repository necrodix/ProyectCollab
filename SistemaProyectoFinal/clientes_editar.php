<?php
include("connect.php");
$sql="SELECT * FROM clientes";
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>clientes editar</title>
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
<br>
<br>
<br>
<a class="nuevoTabla" href="newCli.php">NUEVO</a>

<h1 class="center"> CELIENTES </h1>

<br>
<br>
<br>
<br>

<table class="tabla_clientes_editar">
<tr> 
    <th>RFC</th>
  <th>Nombre</th>
  <th>Teléfono</th>
  <th>Dirección</th>
  <th>Ocupación</th>
  <th>Acciones</th>
</tr>

<?php 
$resul=mysqli_query($con, $sql);
while($muestra=mysqli_fetch_assoc($resul)) {
?>

<tr> 
<td><?php echo $muestra["RFC"]; ?></td>
<td><?php echo $muestra["nombre"]; ?></td>
<td><?php echo $muestra["telefono"]; ?></td>
<td><?php echo $muestra["direccion"]; ?></td>
<td><?php echo $muestra["ocupacion"]; ?></td>
<td>
  <a class="editarTabla" href="editCli.php?fc=<?php echo $muestra["RFC"]; ?>">Editar</a>
  <br>
  <br>
  <a class="eliminarTabla" href="supCli.php?fc=<?php echo $muestra["RFC"]; ?>">Eliminar</a>
</td>

  </tr>

  <?php
}
?>

</table>


</body>
</html>
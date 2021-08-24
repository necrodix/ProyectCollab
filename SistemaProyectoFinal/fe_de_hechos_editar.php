<?php
include("connect.php");
$sql="SELECT * FROM fe_de_hecho";
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>fe de hechos editar</title>
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
<a class="nuevoTabla" href="newFe.php">NUEVO</a>
<br>
<h1 class="center"> FE DE HECHOS </h1>
<br>
<br>

<table class="tabla_fe_de_hechos_editar">
<tr> 
  <th>No. Acta</th>
  <th>No. Libro</th>
  <th>Fecha de realización</th>
  <th>RFC_Cliente</th>
  <th>Lugar de realización</th>
  <th>Descripción</th>
  <th>Acciones</th>
</tr>

<?php 
$resul=mysqli_query($con, $sql);
while($muestra=mysqli_fetch_assoc($resul)) {
?>

<tr> 
<td><?php echo $muestra["acta_numero"]; ?></td>
<td><?php echo $muestra["libro_numero"]; ?></td>
<td><?php echo $muestra["realizacion_fecha"]; ?></td>
<td><?php echo $muestra["RFC_cliente"]; ?></td>
<td><?php echo $muestra["lugar_realizacion"]; ?></td>
<td><?php echo $muestra["descripcion"]; ?></td>
<td>

<br>
  <a class="editarTabla" href="editFe.php?fc=<?php echo $muestra["acta_numero"]; ?>">Editar</a>
  <br>
  <br>
  <a class="eliminarTabla" href="supFe.php?fc=<?php echo $muestra["acta_numero"]; ?>">Eliminar</a>
</td>

  </tr>

  <?php
}
?>

</table>


</body>
</html>
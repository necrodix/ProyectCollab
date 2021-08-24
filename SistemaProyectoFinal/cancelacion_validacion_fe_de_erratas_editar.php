<?php
include("connect.php");
$canc="SELECT * FROM `cancelación_endoso_validación_y_fe_de_erratas_de_factura_o_pedim`";
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>cancelacion validacion fe de erratas</title>
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
<h1 class="center"> CANCELACION VALIDACION Y FE DE ERRATAS </h1>
<br>
<a class="nuevoTabla" href="newCancel.php">NUEVO</a>
<br>
<br>

<table class="tabla_cancelacion_consulta">
<thead>
<tr> 
  <th>No. Factura/Pedimento</th>
  <th>Tipo</th>
  <th>Documento</th>
  <th>Realización Fecha</th>
  <th>RFC_Cliente</th>
  <th>Acciones</th>
</tr>
</thead>
<tbody>

<?php 
$resul=mysqli_query($con, $canc);
while($muestra=mysqli_fetch_assoc($resul)) {
?>

<tr> 
<td><?php echo $muestra["numero_de_factura/pedimento"]; ?></td>
<td><?php echo $muestra["tipo"]; ?></td>
<td><?php echo $muestra["documento"]; ?></td>
<td><?php echo $muestra["fecha_realizacion"]; ?></td>
<td><?php echo $muestra["RFC_cliente"]; ?></td>

<td>
  <a  class="editarTabla" href="editCancel.php?fc=<?php echo $muestra["numero_de_factura/pedimento"]; ?>">Editar</a>
  <br>
  <br>
  <a  class="eliminarTabla" href="supCancel.php?fc=<?php echo $muestra["numero_de_factura/pedimento"]; ?>">Eliminar</a>
</td>

  </tr>

  <?php
}
?>
</tbody>


</table>





</body>
</html>
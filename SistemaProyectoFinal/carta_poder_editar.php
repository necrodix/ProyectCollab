<?php
include("connect.php");
$sql="SELECT * FROM carta_poder";
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>carta poder</title>
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
<h1 class="center"> CARTA PODER </h1>
<br>
<a class="nuevoTabla" href="newCarta.php">NUEVO</a>
<br>
<br>

<table class="tabla_carta_poder_editar">
<tr> 
  <th>RFC_Otorgante</th>
  <th>Fecha de realización</th>
  <th>RFC_Cliente</th>
  <th>Acciones</th>
</tr>

<?php 
$resul=mysqli_query($con, $sql);
while($muestra=mysqli_fetch_assoc($resul)) {
?>

<tr> 
<td><?php echo $muestra["RFC_otorgante"]; ?></td>
<td><?php echo $muestra["fecha_realizacion"]; ?></td>
<td><?php echo $muestra["RFC_cliente"]; ?></td>
<td>
  <a class="editarTabla" href="editCarta.php?fc=<?php echo $muestra["RFC_otorgante"]; ?>">Editar</a>
  <br>  
  <br>  
  <a class="eliminarTabla" href="supCarta.php?fc=<?php echo $muestra["RFC_otorgante"]; ?>">Eliminar</a>
</td>

  </tr>

  <?php
}
?>

</table>

</body>
</html>
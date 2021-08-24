<?php
/*poninedo esta seccion de codigo de php al principio del codigo, esta parte es 
lo primero que leera el navegador, asi pues rescatara una session existente 
o creara una nueva session */
 /*isset comprueba si una variable esta definica, 
si hay algo almacenado en la session sera variable definida será true, 
pero si no hay nada será una variable indefinida será false, 
si no es definida me enviara al header */
if (!isset($_COOKIE['usuario'])) {

  header("location:index.php");
}
include("connect.php");
$sql="SELECT * FROM clientes";
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>clientes consulta</title>
<link rel="stylesheet" href="css/estilos.css"/>
<link rel="stylesheet" href="css/tablas.css"/>
</head>

<body>


<div class="navbar">
  <div class="dr">
    <a href="login_administrador.html">ADMINISTRADOR</a>
    <div class="dropdown">
      <button class="dropbtn">TRABAJOS 
      
      </button>
      <div class="dropdown-content">
      <a class="active" href="avaluos_consulta.php">AVALUOS</a>
      <a href="cancelacion_validacion_fe_de_erratas_consulta.php">CANCELACION/VALIDACION/FE DE ERRATAS</a>
      <a href = "carta_poder_consulta.php"> CARTAS PODER</a>
      <a href = "sociedades_consulta.php"> SOCIEDADES </a> 
      <a href = "clientes_consulta.php">CLIENTES</a> 
      <a href = "ratificacion_de_firma_consulta.php">RATIFICACIONES</a>
      </div>

    </div> 
  </div>
<div class="izq">
  <a  href="cerrar_sesion.php">CERRAR SESION</a>
  </div>
</div>

<h1 class="center"> Consultar informacion </h1> 
<h1 class="center"> CLIENTES </h1>
<table>
<tr> 
  <th class="center">RFC</th>
  <th class="center">Nombre</th>
  <th class="center">Teléfono</th>
  <th class="center">Dirección</th>
  <th class="center">Ocupación</th>
</tr>

<?php 
$resul=mysqli_query($con, $sql);
while($muestra=mysqli_fetch_assoc($resul)) {
?>

<tr> 
<td class="center"><?php echo $muestra["RFC"]; ?></td>
<td class="center"><?php echo $muestra["nombre"]; ?></td>
<td class="center"><?php echo $muestra["telefono"]; ?></td>
<td class="center"><?php echo $muestra["direccion"]; ?></td>
<td class="center"><?php echo $muestra["ocupacion"]; ?></td>
  </tr>

  <?php
}
?>

</table>


<table>
<tr>
  <td> <button>IMPRIMIR</button></td> 
  <td> <button>GUARDAR</button></td>
</tr>
</table>

</body>
</html>
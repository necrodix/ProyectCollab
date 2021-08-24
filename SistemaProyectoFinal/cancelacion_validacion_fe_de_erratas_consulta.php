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
$canc="SELECT * FROM `cancelación_endoso_validación_y_fe_de_erratas_de_factura_o_pedim`";
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>cancelacion consulta</title>
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
<h1 class="center"> Consultar información </h1> 
<h1 class="center"> CANCELACION/VALIDACION/FE ERRATAS </h1>

<table>
<tr> 
    <th>No. Factura/Pedimento</th>
  <th>Tipo</th>
  <th>Documento</th>
  <th>Realización Fecha</th>
  <th>RFC_Cliente</th>
  </tr>

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
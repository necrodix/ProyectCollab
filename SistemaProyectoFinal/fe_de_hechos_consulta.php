<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>fe de hechos consulta</title>
<link rel="stylesheet" href="general.css"/>
<link rel="stylesheet" href="menu.css"/>

</head>

<body>


<h1> FE DE HECHOS </h1>


<div class="center">
 <h1> Consultar informacion </h1> 
</div>

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




<table class="tabla_fe_de_hechos_consulta">
<tr> <td> acta_numero</td><td>libro_numero</td><td> realizacion_fecha</td><td>rfc_cliente</td><td> lugar_realizacion</td><td>descripcion</td></tr>
<tr> <td> </td><td> </td><td> </td><td> </td><td> </td><td> </td></tr>
<tr> <td> </td><td> </td><td> </td><td> </td><td> </td><td> </td> </tr>
</table>



<table class="tabla2_trabajos2_consulta">
<tr> <td><input type="submit" name="enviar" value="IMPRIMIR"></td> 
<td> <input type="submit" name="enviar" value="GUARDAR"></td></tr>
</table>



</body>
</html>
<?php
include("connect.php");
$sql="SELECT * FROM avaluo";
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>avaluo editar</title>
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

<h1 class="center"> AVALUO </h1>
<br>
<a style="margin:34px;" class="nuevoTabla" href="newAva.php">NUEVO</a>
<br>
<br>
<div class="agrupar">
<input type="text" class="textoSearch" id="myInput" onkeyup="myFunction()" placeholder="Buscar en los avaluos.." title="Type in a name">

<select id="seleccion" class="select">
  <option value="1">Clave Catastral</option>
  <option value="2">Tipo de Avaluo</option>
  <option value="3">Realización Fecha</option>
  <option value="4">Lugar Avalúo</option>
  <option value="5">RFC Cliente</option>
  <option value="6">Descripción</option>
</select>
<button style="color:#white;!important;  background-color: #a3aba3; border: 2px solid black;" onclick="myFunction()">Buscar</button>
</div>


<table  id="myTable">
<thead>
  <tr> 
    <th>Clave Catastral</th>
    <th>Tipo de Avaluo</th>
    <th>Realización Fecha</th>
    <th>Lugar Avalúo</th>
    <th>RFC Cliente</th>
    <th>Descripción</th>
    <th>Acciones</th>
  </tr>
</thead>
<tbody>
<?php 
$resul=mysqli_query($con, $sql);
while($muestra=mysqli_fetch_assoc($resul)) {
?>
<tr> 
<td><?php echo $muestra["clave_catastral"]; ?></td>
<td><?php echo $muestra["tipo_de_avaluo"]; ?></td>
<td><?php echo $muestra["realizacion_fecha"]; ?></td>
<td><?php echo $muestra["lugar_avaluo"]; ?></td>
<td><?php echo $muestra["RFC_cliente"]; ?></td>
<td><?php echo $muestra["descripcion"]; ?></td>
<td>
  <br>
  <a class="editarTabla" href="editAva.php?fc=<?php echo $muestra["clave_catastral"]; ?>">Editar</a>
  <br>
  <br>
  <a class="eliminarTabla" href="supAva.php?fc=<?php echo $muestra["clave_catastral"]; ?>">Eliminar</a>
  <br>
</td>

  </tr>
<?php
}
?>

</tbody>
</table>

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  let opcion=document.getElementById("seleccion").value

  for (i = 0; i < tr.length; i++) {

if(opcion==1){
  td = tr[i].getElementsByTagName("td")[0];
}
else if(opcion==2){
  td = tr[i].getElementsByTagName("td")[1];
}
else if(opcion==3){
  td = tr[i].getElementsByTagName("td")[2];
}
else if(opcion==4){
  td = tr[i].getElementsByTagName("td")[3];
}
else if(opcion==5){
  td = tr[i].getElementsByTagName("td")[4];
}
else{
  td = tr[i].getElementsByTagName("td")[5];
}

  
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }

}
</script>




</body>
</html>
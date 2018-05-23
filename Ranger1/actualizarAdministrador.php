<?php
include "encabezado.inc";
include "conexion.php";

$peticion = "SELECT * FROM admin WHERE id = '".$_GET['id']."'";
$resultado = mysqli_query($conexion, $peticion);
$fila = mysqli_fetch_array($resultado);

echo "<link href='css/bootstrap.min.css' rel='stylesheet'>
      <meta charset='utf8'";

echo "
<center>
<div class='container' align='center'>
<form action='InsertarActualizacionAdministrador.php?id=".$fila['id']."' method='post' enctype='application/x-www-form-urlencoded' width='80%'>

<h4><p>Título profesional:<br><input type='text' name='titulo' min='0' value=".$fila['titulo']."></p>
<p>Nombre del alumno:<br><input type='text' name='nombre' value=".$fila['nombre']."></p>
<p>Teléfono de contacto:<br><input type='text' name='correo' min='0' value=".$fila['correo']."></p></h4>
	
	<input type='submit' class='btn btn-primary btn-block' value='Guardar cambios'>
</form>
</center>
";
?>
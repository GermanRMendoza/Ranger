<?php
include "encabezado.inc";
include "conexion.php";

$peticion = "SELECT * FROM alumno WHERE id = '".$_GET['id']."'";
$resultado = mysqli_query($conexion, $peticion);
$fila = mysqli_fetch_array($resultado);

echo "<link href='css/bootstrap.min.css' rel='stylesheet'>";

echo "
<center>
<div class='container' align='center'>
<form action='InsertarActualizacionAlumno.php?id=".$fila['id']."' method='post' enctype='application/x-www-form-urlencoded' width='80%'>

<h4><p>Matrícula del alumno:<br><input type='number' name='matricula' min='0' value=".$fila['matricula']."></p>
<p>Nombre del alumno:<br><input type='text' name='nombre' value=".$fila['nombre']."></p>
<p>Teléfono de contacto:<br><input type='text' name='telefono' min='0' value=".$fila['telefono_contacto']."></p></h4>
	
	<input type='submit' class='btn btn-primary btn-block' value='Guardar cambios'>
</form>
</center>
";
?>
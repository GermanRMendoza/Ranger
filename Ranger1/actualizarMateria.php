<?php
include "encabezado.inc";
include "conexion.php";

$peticion = "SELECT * FROM materias WHERE id = '".$_GET['id']."'";
$resultado = mysqli_query($conexion, $peticion);
$fila = mysqli_fetch_array($resultado);

echo "<link href='css/bootstrap.min.css' rel='stylesheet'>";

echo "
<center>
<div class='container' align='center'>
<form action='InsertarActualizacionMateria.php?id=".$fila['id']."' method='post' enctype='application/x-www-form-urlencoded' width='80%'>

<h4><p>Clave:<br><input type='text' name='clave' value=".$fila['clave']."></p>
<p>Nombre de la materia:<br><input type='text' name='nombre' value=".$fila['nombre']."></p>
<p>Imagen:<br><input type='file' name='imagen' value=".$fila['imagen']."></p></h4>
	
	<input type='submit' class='btn btn-primary btn-block' value='Guardar cambios'>
</form>
</center>
";
?>
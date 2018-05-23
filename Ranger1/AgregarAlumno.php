<?php
include "encabezado.inc";

echo "<link href='css/bootstrap.min.css' rel='stylesheet'>";

echo "
<center>
<div class='container' align='center'>
<form action='InsertarAlumno.php' method='post' enctype='application/x-www-form-urlencoded' width='80%'>

<h4><p>Matrícula del alumno:<br><input type='number' name='matricula' min='0'></p>
<p>Nombre del alumno:<br><input type='text' name='nombre'></p>
<p>Teléfono de contacto:<br><input type='text' name='telefono' min='0'></p></h4>
	
	<input type='submit' class='btn btn-primary btn-block' value='Registrar alumno'>
</form>
</center>
";
?>
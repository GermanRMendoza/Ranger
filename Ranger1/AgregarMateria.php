<?php
include "encabezado.inc";

echo "<link href='css/bootstrap.min.css' rel='stylesheet'>";

echo "
<center>
<div class='container' align='center'>
<form action='InsertarMateria.php' method='post' enctype='application/x-www-form-urlencoded' width='80%'>

<h4><p>Clave:<br><input type='text' name='clave' min='0'></p>
<p>Nombre de la materia:<br><input type='text' name='nombre'></p>
<p>Imagen:<br><input type='file' name='imagen' min='0'></p></h4>	
	<input type='submit' class='btn btn-primary btn-block' value='Registrar materia'>
</form>
</center>
";
?>
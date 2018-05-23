<?php
include "encabezado.inc";

echo "<link href='css/bootstrap.min.css' rel='stylesheet'>";

echo "
<center>
<div class='container' align='center'>
<form action='InsertarAdministrador.php' method='post' enctype='application/x-www-form-urlencoded' width='80%'>

<h4><p>Título profesional abreviado:<br><input type='text' name='titulo' min='0'></p>
<p>Nombre del administrador:<br><input type='text' name='nombre'></p>
<p>Correo electrónico:<br><input type='email' name='correo' min='0'></p>
<p>Contraseña para ingresar:<br><input type='password' name='contrasena' min='0'></p></h4>	
	<input type='submit' class='btn btn-primary btn-block' value='Registrar administrador'>
</form>
</center>
";
?>
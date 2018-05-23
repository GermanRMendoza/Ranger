<?php  
include "encabezado.inc";
include 'conexion.php';

$peticion = "SELECT * FROM alumno_grupo WHERE id = '".$_GET['id']."'";
$resultado = mysqli_query($conexion, $peticion);
$fila = mysqli_fetch_array($resultado);

echo "<div class='container' align='center'>
	<form action='ActualizarNota.php?id=".$_GET['id']."' method='post' enctype='application/x-www-form-urlencoded' width='80%'>

	<center><h4>Ingresar nota: <br><textarea name='nota' rows='5' cols='65'>".$fila['notas']."</textarea></h4></center>

	<input type='submit' class='btn btn-primary btn-block' value='Guardar nota'>
";


?>
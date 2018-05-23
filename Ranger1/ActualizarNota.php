<?php  
include "encabezado.inc";
include 'conexion.php';

$peticionAct = "UPDATE alumno_grupo SET notas='".$_POST['nota']."' WHERE id = '".$_GET['id']."'";
$resultadoAct = mysqli_query($conexion, $peticionAct);


?>
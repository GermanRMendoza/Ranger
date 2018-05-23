
<?php
 include 'conexion.php';
$consulta='select * from nombre_tabla where id="'.$_GET['id'].'"';

if ($ejecución_de_la_consulta=$conexion->query($consulta))
{
        $fila=$ejecución_de_la_consulta->fetch_assoc();

$peticion = "DELETE FROM nombre_tabla WHERE id='".$fila['id']."'";
$resultado = mysqli_query($conexion, $peticion);
header ('location: gestionar_usuarios.php');
}

mysqli_close($conexion);
?>

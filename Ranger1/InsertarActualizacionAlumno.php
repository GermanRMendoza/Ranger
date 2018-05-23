<?php  
include "encabezado.inc";
include 'conexion.php';

$peticionActM = "UPDATE alumno SET matricula='".$_POST['matricula']."' WHERE id = '".$_GET['id']."'";
$resultadoActM = mysqli_query($conexion, $peticionActM);

$peticionActN = "UPDATE alumno SET nombre='".$_POST['nombre']."' WHERE id = '".$_GET['id']."'";
$resultadoActN = mysqli_query($conexion, $peticionActN);

$peticionActT = "UPDATE alumno SET telefono_contacto='".$_POST['telefono']."' WHERE id = '".$_GET['id']."'";
$resultadoActT = mysqli_query($conexion, $peticionActT);

echo "<script>
    window.location = 'CRUDalumnos.php';
</script>";
?>
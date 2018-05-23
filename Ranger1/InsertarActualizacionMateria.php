<?php  
include "encabezado.inc";
include 'conexion.php';

$peticionActM = "UPDATE materias SET clave='".$_POST['clave']."' WHERE id = '".$_GET['id']."'";
$resultadoActM = mysqli_query($conexion, $peticionActM);

$peticionActN = "UPDATE materias SET nombre='".$_POST['nombre']."' WHERE id = '".$_GET['id']."'";
$resultadoActN = mysqli_query($conexion, $peticionActN);

$peticionActT = "UPDATE materias SET imagen='".$_POST['imagen']."' WHERE id = '".$_GET['id']."'";
$resultadoActT = mysqli_query($conexion, $peticionActT);

echo "<script>
    window.location = 'CRUDmaterias.php';
</script>";
?>
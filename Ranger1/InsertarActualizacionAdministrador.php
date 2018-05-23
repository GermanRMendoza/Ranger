<?php  
include "encabezado.inc";
include 'conexion.php';

$peticionActM = "UPDATE admin SET titulo='".$_POST['titulo']."' WHERE id = '".$_GET['id']."'";
$resultadoActM = mysqli_query($conexion, $peticionActM);

$peticionActN = "UPDATE admin SET nombre='".$_POST['nombre']."' WHERE id = '".$_GET['id']."'";
$resultadoActN = mysqli_query($conexion, $peticionActN);

$peticionActT = "UPDATE admin SET correo='".$_POST['correo']."' WHERE id = '".$_GET['id']."'";
$resultadoActT = mysqli_query($conexion, $peticionActT);

echo "<script>
    window.location = 'CRUDadministradores.php';
</script>";
?>
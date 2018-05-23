<?php
include "encabezado.inc";
include "conexion.php";

$peticion = "DELETE FROM alumno WHERE id = '".$_GET['id']."'";
$resultado = mysqli_query($conexion, $peticion);

echo "<script>
    window.location = 'CRUDalumnos.php';
</script>";
?>
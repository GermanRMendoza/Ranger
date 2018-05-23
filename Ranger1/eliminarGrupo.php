<?php
include "encabezado.inc";
include "conexion.php";

$peticion = "DELETE FROM relacion_grupos WHERE id = '".$_GET['id']."'";
$resultado = mysqli_query($conexion, $peticion);

echo "<script>
    window.location = 'CRUDgrupos.php';
</script>";
?>